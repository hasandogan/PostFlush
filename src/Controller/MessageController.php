<?php

namespace App\Controller;

use App\Service\MessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/message', name: 'store', methods: ['POST'])]
    public function store(MessageService $messageService,Request $request): JsonResponse
    {
        //Validation eklenecek.

        //Response Class yazılacak. standzation için
        return new JsonResponse($messageService->storeMessage($request->toArray()), 200, ["Content-Type" => "application/json"]);
    }
}
