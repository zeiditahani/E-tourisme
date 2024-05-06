<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UmrahRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UmrahRepository::class)]
#[ApiResource]
class Umrah
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $detailed_description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $included = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $unincluded = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?array $images = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $agency = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $category = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $services = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $regions = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $includedExcursions = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $extraExcursions = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $goodAddresses = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
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

    public function getDetailedDescription(): ?string
    {
        return $this->detailed_description;
    }

    public function setDetailedDescription(?string $detailed_description): static
    {
        $this->detailed_description = $detailed_description;

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

    public function getAgency(): ?string
    {
        return $this->agency;
    }

    public function setAgency(?string $agency): static
    {
        $this->agency = $agency;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getServices(): ?array
    {
        return $this->services;
    }

    public function setServices(?array $services): static
    {
        $this->services = $services;

        return $this;
    }

    public function getRegions(): ?array
    {
        return $this->regions;
    }

    public function setRegions(?array $regions): static
    {
        $this->regions = $regions;

        return $this;
    }

    public function getIncludedExcursions(): ?array
    {
        return $this->includedExcursions;
    }

    public function setIncludedExcursions(?array $includedExcursions): static
    {
        $this->includedExcursions = $includedExcursions;

        return $this;
    }

    public function getExtraExcursions(): ?array
    {
        return $this->extraExcursions;
    }

    public function setExtraExcursions(?array $extraExcursions): static
    {
        $this->extraExcursions = $extraExcursions;

        return $this;
    }

    public function getGoodAddresses(): ?array
    {
        return $this->goodAddresses;
    }

    public function setGoodAddresses(?array $goodAddresses): static
    {
        $this->goodAddresses = $goodAddresses;

        return $this;
    }
}
