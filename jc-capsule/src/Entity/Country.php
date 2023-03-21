<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
class Country
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 64)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'country')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Continent $continent = null;

    #[ORM\OneToMany(mappedBy: 'country', targetEntity: Producer::class)]
    private Collection $producers;

    public function __construct()
    {
        $this->producers = new ArrayCollection();
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

    public function getContinent(): ?Continent
    {
        return $this->continent;
    }

    public function setContinent(?Continent $continent): self
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * @return Collection<int, Producer>
     */
    public function getProducers(): Collection
    {
        return $this->producers;
    }

    public function addProducer(Producer $producer): self
    {
        if (!$this->producers->contains($producer)) {
            $this->producers->add($producer);
            $producer->setCountry($this);
        }

        return $this;
    }

    public function removeProducer(Producer $producer): self
    {
        if ($this->producers->removeElement($producer)) {
            // set the owning side to null (unless already changed)
            if ($producer->getCountry() === $this) {
                $producer->setCountry(null);
            }
        }

        return $this;
    }
}
