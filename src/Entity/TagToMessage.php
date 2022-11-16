<?php

namespace App\Entity;

use App\Repository\TagToMessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagToMessageRepository::class)]
#[ORM\HasLifecycleCallbacks]
class TagToMessage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $tagId = null;

    #[ORM\Column]
    private ?int $messageId = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updateAt = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    /**
     * @param int|null $tagId
     */
    public function setTagId(?int $tagId): void
    {
        $this->tagId = $tagId;
    }

    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    /**
     * @param int|null $messageId
     */
    public function setMessageId(?int $messageId): void
    {
        $this->messageId = $messageId;
    }


    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    #[ORM\PrePersist]
    public function setCreatedAt(): self
    {
        $this->createdAt = new \DateTimeImmutable();

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->updateAt;
    }

    #[ORM\PrePersist]
    public function setUpdateAt(): self
    {
        $this->updateAt = new \DateTimeImmutable();

        return $this;
    }
}
