<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\HikingRepository;
use App\Repository\RegionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HikingRepository::class)]
#[ApiResource]
class Hiking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $detailed_description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $included = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $unincluded = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $images = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $distance = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $category = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $includedExcursions = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $extraExcursions = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $goodAddresses = null;

    #[ORM\OneToMany(mappedBy: 'hiking', targetEntity: Region::class, orphanRemoval: true )]
    private Collection $regions;

    #[ORM\ManyToOne(inversedBy: 'hiking',targetEntity: Agency::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Agency $agence = null;


    public function __construct()
    {
        $this->regions = new ArrayCollection();
    }

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

    public function getDistance(): ?string
    {
        return $this->distance;
    }

    public function setDistance(?string $distance): static
    {
        $this->distance = $distance;

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

    /**
     * @return Collection<int, region>
     */
    public function getRegions(): Collection
    {
        return $this->regions;
    }

    public function addRegion(region $region): static
    {
        if (!$this->regions->contains($region)) {
            $this->regions->add($region);
            $region->setHiking($this);
        }

        return $this;
    }

    public function removeRegion(region $region): static
    {
        if ($this->regions->removeElement($region)) {
            // set the owning side to null (unless already changed)
            if ($region->getHiking() === $this) {
                $region->setHiking(null);
            }
        }

        return $this;
    }

    public function getAgence(): ?Agency
    {
        return $this->agence;
    }

    public function setAgence(?Agency $agence): static
    {
        $this->agence = $agence;

        return $this;
    }

   
  

}
