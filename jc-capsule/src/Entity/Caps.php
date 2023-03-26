<?php

namespace App\Entity;

use App\Repository\CapsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CapsRepository::class)]
class Caps
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1020, nullable: true)]
    private ?string $color = null;

    #[ORM\Column(length: 1020, nullable: true)]
    private ?string $draw = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $picture_path = null;

    #[ORM\ManyToOne]
    private ?Producer $Producer = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updated_at = null;

    public function __construct() {
        $this->setCreatedAt(new \DateTimeImmutable());

        $this->setUpdatedAt(new \DateTimeImmutable());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getDraw(): ?string
    {
        return $this->draw;
    }

    public function setDraw(?string $draw): self
    {
        $this->draw = $draw;

        return $this;
    }

    public function getPicturePath(): ?string
    {
        return $this->picture_path;
    }

    public function setPicturePath(?string $picture_path): self
    {
        $this->picture_path = $picture_path;

        return $this;
    }

    public function getProducer(): ?Producer
    {
        return $this->Producer;
    }

    public function setProducer(?Producer $Producer): self
    {
        $this->Producer = $Producer;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
