<?php

namespace App\MessageHandler;

use App\Entity\Tag;
use App\Entity\TagToMessage;
use App\Message\CreateTagMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Doctrine\ORM\EntityManagerInterface;

#[AsMessageHandler]
class CreateTagMessageHandler

{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;

    }

    public function __invoke(CreateTagMessage $message)
    {
        $tags = $this->getMessagefragmentation($message->getContent()['message']);
        if (isset($tags) && $tags != null){
            $tag = $this->createTagToDatabase($tags);
            if ($tag != null){
                $this->createTagToMessage($message, $tag);
            }else{

            }
        }

        // TODO: Implement __invoke() method.
    }

    public function getMessagefragmentation($message)
    {
        $message = explode(" ", $message);
        $input = "#";

        $result = array_filter($message, function ($item) use ($input) {
            if (stripos($item, $input) !== false) {
                return true;
            }
            return false;
        });
        return $result;
    }


    public function createTagToDatabase($tags)
    {
        foreach ($tags as $message) {
            $message = $this->createSlug($message);
            try {
                $tag = new Tag();
                $tagRepository = $this->em->getRepository(Tag::class)->findOneBy(['name' => $message]);
                if (isset($tagRepository)) {
                    return $tagRepository->getId();
                }
                $tag->setName($message);
                $tag->setSlug("/tag/" . $message);
                $this->em->persist($tag);
                $this->em->flush();
            } catch (\Exception $exception) {
                dd($exception->getMessage());
            }

            if ($tag->getId() !== null){
                return $tag->getId();
            }
            return $tagRepository->getId();
        }
    }

    public function createSlug($tagName)
    {
        $text = trim($tagName);
        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ', '.', '#');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '', '', '');
        $text = ltrim($text, '#');
        $new_text = str_replace($search, $replace, $text);
        return $new_text;
    }

    public function createTagToMessage($message, $tagId)
    {
        try {
            $tagToMessage = new TagToMessage();
            $tagToMessage->setMessageId($message->getcontent()['messageId']);
            $tagToMessage->setTagId($tagId);
            $this->em->persist($tagToMessage);
            $this->em->flush();
        } catch (\Exception $exception) {
            dd($exception->getMessage()."". $exception->getFile() ."". $exception->getLine());
        }
    }


}