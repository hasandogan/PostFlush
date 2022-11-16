<?php

namespace App\Service;

use App\Entity\Message;
use App\Entity\Tag;
use App\Message\CreateTagMessage;
use App\Repository\MessageRepository;
use App\Repository\TagRepository;
use App\Repository\TagToMessageRepository;
use App\Service\Mercure\MercureService;
use ContainerFb7Iox3\getTagRepositoryService;
use Exception;
use JetBrains\PhpStorm\ArrayShape;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Messenger\MessageBusInterface;
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
     * @var TagToMessageRepository $tagToMessageRepository
     */
    protected TagToMessageRepository $tagToMessageRepository;

    protected TagRepository $tagRepositoryService;

    /**
     * @var HubInterface $hub
     */
    protected HubInterface $hub;
    /**
     * @var MessageBusInterface
     */
    protected MessageBusInterface $bus;

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


    public function __construct(MessageRepository $messageRepository, SerializerInterface $serializer, MessageBusInterface $bus, TagToMessageRepository $tagToMessageRepository, TagRepository $tagRepositoryService)
    {
        $this->messageRepository = $messageRepository;
        $this->serializer = $serializer;
        $this->bus = $bus;
        $this->tagToMessageRepository = $tagToMessageRepository;
        $this->tagRepositoryService = $tagRepositoryService;
    }

    /**
     * @param array $data
     * @return array
     * @throws ExceptionInterface
     * @throws Exception
     */
    #[ArrayShape(['message' => "string", 'data' => "mixed"])]
    public function storeMessage(array $data): array
    {
        $mercureService = new MercureService();
        $mercureService->publish($this->getHub(), $data);

        // TODO : Exception class oluşturulacak. exception yötimleri buradan yapılacak.
        try {
            $message = new Message();
            $message->setMessage($data['message']);
            $message->setUsername($data['username']);
            $message->setIp($_SERVER['REMOTE_ADDR']);
            $this->messageRepository->add($message, true);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        $consumerMessage = [
            'message' => $data['message'],
            'messageId' => $message->getId()
        ];
        $this->bus->dispatch(new CreateTagMessage($consumerMessage));

        return [
            'message' => 'Message created',
            'data' => $this->serializer->normalize($message, null)
        ];
    }

    public function getTagList()
    {
      $tagToMessageRepository = $this->tagToMessageRepository->findLast24HoursTags(new \DateTime());
      $tagInfo = [];
        foreach ($tagToMessageRepository as $tagData) {
            $tag = $this->tagRepositoryService->findOneBy(['id' =>  $tagData['tagId']]);
            $tagInfo[] = [
                'tagId' => $tag->getId(),
                'tagName' => $tag->getName(),
                'slug' => $tag->getSlug(),
                'tagUsageCount' => $tagData['count'],
            ];
        }

        return $tagInfo;
    }

}
