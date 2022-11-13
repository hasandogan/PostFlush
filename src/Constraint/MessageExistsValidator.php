<?php

namespace App\Constraint;

use App\Entity\Message;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NonUniqueResultException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class MessageExistsValidator
 * @package App\Constraint
 */
class MessageExistsValidator extends ConstraintValidator
{
    /** @var EntityManager */
    private EntityManager $entityManager;

    /**
     * @param ContainerInterface $container
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __construct(ContainerInterface $container)
    {
        $this->entityManager = $container->get('doctrine')->getManager();
    }

    /**
     * @param mixed $value
     * @param Constraint $constraint
     * @throws NonUniqueResultException
     */
    public function validate($value, Constraint $constraint)
    {
        /** @var MessageRepository $messageRepo */
        $messageRepo = $this->entityManager->getRepository(Message::class);
        $message = $messageRepo->getLastMessageFromIp();
        if ($message) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}