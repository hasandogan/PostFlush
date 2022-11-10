<?php

namespace App\Service\Mercure;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

class MercureService
{
    /**
     * @param HubInterface $hub
     * @param array $data
     * @return Response
     */
    public function publish(HubInterface $hub,array $data): Response
    {
        $message = $data['message'];
        $username = $data['username'];

        try {

            $update = new Update(
                'live_message',
                json_encode(
                    [
                        'message' => $message,
                        'username' => $username,
                    ], JSON_THROW_ON_ERROR
                ),
                true
            );
            $hub->publish($update);
        } catch (\Exception $exception) {
            // TODO : exception log atılacak
            dd($exception->getMessage());
        }

        return new Response();
    }

    public function generateJwt(HubInterface $hub): string
    {
        dd($hub->getFactory()->create(['live_message'], ['live_message']));
    }

    public function subscribe()
    {
        return $this->render('mercure-res.twig', []);
    }
}
