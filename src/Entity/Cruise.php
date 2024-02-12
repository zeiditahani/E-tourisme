<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CruiseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CruiseRepository::class)]
#[ApiResource]
class Cruise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $detaielddescription = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $included = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $unincluded = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $images = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDetaielddescription(): ?string
    {
        return $this->detaielddescription;
    }

    public function setDetaielddescription(?string $detaielddescription): static
    {
        $this->detaielddescription = $detaielddescription;

        return $this;
    }

    public function getIncluded(): ?string
    {
        return $this->included;
    }

    public function setIncluded(?string $included): static
    {
        $this->included = $included;

        return $this;
    }

    public function getUnincluded(): ?string
    {
        return $this->unincluded;
    }

    public function setUnincluded(?string $unincluded): static
    {
        $this->unincluded = $unincluded;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getImages(): ?array
    {
        return $this->images;
    }

    public function setImages(?array $images): static
    {
        $this->images = $images;

        return $this;
    }
}
