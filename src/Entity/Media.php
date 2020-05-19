<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediaRepository::class)
 */
class Media
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $gallery_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $order_gallery;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filePath;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGalleryId(): ?int
    {
        return $this->gallery_id;
    }

    public function setGalleryId(?int $gallery_id): self
    {
        $this->gallery_id = $gallery_id;

        return $this;
    }

    public function getOrderGallery(): ?int
    {
        return $this->order_gallery;
    }

    public function setOrderGallery(?int $order_gallery): self
    {
        $this->order_gallery = $order_gallery;

        return $this;
    }

    public function getDescriptions(): ?string
    {
        return $this->descriptions;
    }

    public function setDescriptions(?string $descriptions): self
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    public function setFilePath(string $filePath): self
    {
        $this->filePath = $filePath;

        return $this;
    }
}
