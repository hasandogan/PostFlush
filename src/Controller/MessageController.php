<?php

namespace App\Controller;

use App\Service\MessageService;
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
    public function store(MessageService $messageService, Request $request, HubInterface $hub): JsonResponse
    {
        // TODO : Validation eklenecek.
        $messageService->setHub($hub);

        // TODO : Response Class yazılacak. standzation için
        return new JsonResponse($messageService->storeMessage($request->request->all()), 200, ["Content-Type" => "application/json"]);
    }
}
