<?php

namespace App\Service;

use App\Entity\Message;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManager;

class MessageService
{
    //Base Service yapılacak service ler buradan kalıtım alacak get,store,update,delete işlemleri abstract üzrinden yapılacak.

    /**
     * @var MessageRepository $messageRepository
     */
    protected MessageRepository $messageRepository;

    public function __construct(MessageRepository $messageRepository) {
        $this->messageRepository = $messageRepository;
    }

    public function storeMessage(array $data) : array {
        //try catch yapısı eklecek.
        //Exception class oluşturulacak. exception yötimleri buradan yapılacak.
        $message = new Message();
        $message->setMessage($data['message']);
        $message->setUsername($data['username']);
        $message->setIp($_SERVER['REMOTE_ADDR']);
        $this->messageRepository->add($message);

        //array result oluşturulacak mesaj ve entity return olacak.
        //repo üzerinden data ekelencek. return olarak result dönecek.
        return [];
    }

}