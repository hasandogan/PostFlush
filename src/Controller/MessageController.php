<?php

namespace App\Controller;

use App\Entity\Message;
use App\Service\MessageService;
use App\Validator\Message\PostValidator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class MessageController extends AbstractController
{
    /**
     * @throws ExceptionInterface
     */
    #[Route('/message', name: 'store', methods: ['POST'])]
    public function store(MessageService $messageService, Request $request, HubInterface $hub, PostValidator $validator): JsonResponse
    {
        // TODO : Validation eklenecek.
        $validatorResult = $validator->validate($request->request->all());
        if ($validatorResult->count() > 0) {
            return $this->json(['success' => false, 'message' => $validatorResult[0]->getMessage()]);
        }
        $messageService->setHub($hub);

        // TODO : Response Class yazılacak. standzation için
        return new JsonResponse($messageService->storeMessage($request->request->all()), 200, ["Content-Type" => "application/json"]);
    }

    /**
     * @throws ExceptionInterface
     */
    #[Route('/lastMessage', name: 'lastMessage', methods: ['POST'])]
    public function getMessage(ManagerRegistry $doctrine){
        return new JsonResponse(array_reverse($doctrine->getManager()->getRepository(Message::class)->findByExampleField()), 200, ["Content-Type" => "application/json"]);
    }
}
