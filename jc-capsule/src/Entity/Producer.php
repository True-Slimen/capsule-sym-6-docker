<?php

namespace App\Entity;

use App\Repository\ProducerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProducerRepository::class)]
class Producer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'producers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?category $category = null;

    #[ORM\OneToMany(mappedBy: 'producer', targetEntity: Caps::class, orphanRemoval: true)]
    private Collection $caps;

    public function __construct()
    {
        $this->caps = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?category
    {
        return $this->category;
    }

    public function setCategory(?category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, Caps>
     */
    public function getCaps(): Collection
    {
        return $this->caps;
    }

    public function addCap(Caps $cap): self
    {
        if (!$this->caps->contains($cap)) {
            $this->caps->add($cap);
            $cap->setProducer($this);
        }

        return $this;
    }

    public function removeCap(Caps $cap): self
    {
        if ($this->caps->removeElement($cap)) {
            // set the owning side to null (unless already changed)
            if ($cap->getProducer() === $this) {
                $cap->setProducer(null);
            }
        }

        return $this;
    }
}
