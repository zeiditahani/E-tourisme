<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RegionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegionRepository::class)]
#[ApiResource]
class Region
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\ManyToOne(inversedBy: 'regions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hiking $hiking = null;

    #[ORM\ManyToOne(inversedBy: 'regions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cruise $cruise = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getHiking(): ?Hiking
    {
        return $this->hiking;
    }

    public function setHiking(?Hiking $hiking): static
    {
        $this->hiking = $hiking;

        return $this;
    }
    public function __toString()
{
    // Retournez une chaîne représentant la région, par exemple, son titre
    return $this->title;
}

    public function getCruise(): ?Cruise
    {
        return $this->cruise;
    }

    public function setCruise(?Cruise $cruise): static
    {
        $this->cruise = $cruise;

        return $this;
    }
}
