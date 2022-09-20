<?php

namespace App\Controller;

use App\Service\MessageService;
use App\Validator\Message\PostValidator;
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
}
