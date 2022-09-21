<?php

namespace App\Service;

use App\Entity\Message;
use App\Repository\MessageRepository;
use App\Service\Mercure\MercureService;
use Exception;
use JetBrains\PhpStorm\ArrayShape;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\SerializerInterface;

class MessageService
{
    // TODO : Base Service yapılacak service ler buradan kalıtım alacak get,store,update,delete işlemleri abstract üzrinden yapılacak.

    /**
     * @var MessageRepository $messageRepository
     */
    protected MessageRepository $messageRepository;

    /**
     * @var SerializerInterface $serializer
     */
    protected SerializerInterface $serializer;

    /**
     * @var HubInterface $hub
     */
    protected HubInterface $hub;

    /**
     * @return HubInterface
     */
    public function getHub(): HubInterface
    {
        return $this->hub;
    }

    /**
     * @param HubInterface $hub
     */
    public function setHub(HubInterface $hub): void
    {
        $this->hub = $hub;
    }

    public function __construct(MessageRepository $messageRepository, SerializerInterface $serializer) {
        $this->messageRepository = $messageRepository;
        $this->serializer = $serializer;
    }

    /**
     * @param array $data
     * @return array
     * @throws ExceptionInterface
     * @throws Exception
     */
    #[ArrayShape(['message' => "string", 'data' => "mixed"])]
    public function storeMessage(array $data) : array {
        $mercureService = new MercureService();
        $mercureService->publish($this->getHub(), $data);
        return  [];
        // TODO : Exception class oluşturulacak. exception yötimleri buradan yapılacak.
        try {
            $message = new Message();
            $message->setMessage($data['message']);
            $message->setUsername($data['username']);
            $message->setIp($_SERVER['REMOTE_ADDR']);
            $this->messageRepository->add($message,true);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return [
            'message' => 'Message created',
            'data' => $this->serializer->normalize($message, null)
        ];
    }

}
