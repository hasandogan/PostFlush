<?php

namespace App\Controller;

use App\Entity\Message;
use App\Message\CreateTagMessage;
use App\Service\MessageService;
use App\Validator\Message\PostValidator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class MessageController extends AbstractController
{
    /**
     * @throws ExceptionInterface
     */
    #[Route('/message', name: 'store', methods: ['POST'])]
    public function store(MessageService $messageService, Request $request, HubInterface $hub, PostValidator $validator, MessageBusInterface $bus): JsonResponse
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
    public function getMessage(ManagerRegistry $doctrine)
    {
        return new JsonResponse(array_reverse($doctrine->getManager()->getRepository(Message::class)->findLast100Message()), 200, ["Content-Type" => "application/json"]);
    }

    /**
     * @param HubInterface $hub
     * @param Request $request
     */
    #[Route('/jwt', name: 'jwt')]
    public function generateJwt(HubInterface $hub, Request $request)
    {
        $tag = array_keys($request->request->all());
        if ($tag[0] == '/') {
            $tag[0] = 'live_message';
        }
        return new JsonResponse($hub->getProvider()->getJwt($tag[0]), 200, ["Content-Type" => "application/json"]);

    }

    #[Route('/getTagList', name: 'TagList', methods: ['POST'])]
    public function getTag(HubInterface $hub,MessageService $messageService)
    {

        $messageService->setHub($hub);

        return new JsonResponse($messageService->getTagList(), 200, ["Content-Type" => "application/json"]);
    }
}
