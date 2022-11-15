<?php

namespace App\MessageHandler;

use App\Entity\Tag;
use App\Message\CreateTagMessage;
use Doctrine\Persistence\ManagerRegistry;
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
        $tags =  $this->getMessagefragmentation($message->getContent()['message']);
        $this->createTagToDatabase($tags);
        // TODO: Implement __invoke() method.
    }

    public function getMessagefragmentation($message)
    {
        $message = explode(" ",$message);
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
            try {
                $tag = new Tag();
                $tagRepository = $this->em->getRepository(Tag::class)->findOneBy(['name' => $tags]);
                if (isset($tagRepository)){
                    continue;
                }
                $tag->setName($message);
                $tag->setSlug("/tag/" . ltrim($this->createSlug($message), '#'));
                $this->em->persist($tag);
                $this->em->flush();
            } catch (\Exception $exception) {
                dd($exception->getMessage());
            }

        }
    }

    public function createSlug($tagName){
        $text = trim($tagName);
        $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
        $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
        $new_text = str_replace($search,$replace,$tagName);
        return $new_text;
    }




}