<?php

namespace App\Entity;

use App\Repository\CapsRepository;
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
}
