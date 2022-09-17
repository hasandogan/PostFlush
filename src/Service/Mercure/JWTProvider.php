<?php

namespace App\Service\Mercure;

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Key\InMemory;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mercure\Jwt\TokenProviderInterface;
use Lcobucci\JWT\Signer\Hmac\Sha256;

/**
 *
 */
final class JWTProvider implements TokenProviderInterface
{
    const LIVE_MESSAGE = 'live_message';

    /**
     * @var ContainerBagInterface
     */
    protected $containerBag;

    public function __construct(SessionInterface $session, ContainerBagInterface $containerBag)
    {
        $this->session = $session;
        $this->containerBag = $containerBag;
    }

    public function getJwt(): string
    {
        $mercureJwtSecret = $this->containerBag->get('mercure_secret_key');
        $configuration = Configuration::forSymmetricSigner(
            new Sha256(),
            InMemory::plainText($mercureJwtSecret)
        );

        return $configuration
            ->builder()
            ->withClaim('mercure', [
                'publish' => [
                    self::LIVE_MESSAGE
                ],
                'subscribe' => [
                    self::LIVE_MESSAGE
                ],
            ])
            ->getToken(
                $configuration->signer(),
                $configuration->signingKey()
            )
            ->toString();
    }
}