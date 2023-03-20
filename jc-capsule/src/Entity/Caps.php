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

    #[ORM\ManyToOne(inversedBy: 'caps')]
    #[ORM\JoinColumn(nullable: false)]
    private ?producer $producer = null;

    #[ORM\Column(length: 1020, nullable: true)]
    private ?string $color = null;

    #[ORM\Column(length: 1020, nullable: true)]
    private ?string $draw = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProducer(): ?producer
    {
        return $this->producer;
    }

    public function setProducer(?producer $producer): self
    {
        $this->producer = $producer;

        return $this;
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
}
