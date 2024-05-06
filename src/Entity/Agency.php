<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\hiking;
use App\Repository\AgencyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AgencyRepository::class)]
#[ApiResource(

    //itemOperations: ['get']
)]
class Agency
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
   // #[Groups(['read:collection'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: hiking::class)]
    private Collection $hiking;

    public function __construct()
    {
        $this->hiking = new ArrayCollection();
    }

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

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return Collection<int, hiking>
     */
    public function getHiking(): Collection
    {
        return $this->hiking;
    }

    public function addHiking(hiking $hiking): static
    {
        if (!$this->hiking->contains($hiking)) {
            $this->hiking->add($hiking);
            $hiking->setAgence($this);
        }

        return $this;
    }

    public function removeHiking(hiking $hiking): static
    {
        if ($this->hiking->removeElement($hiking)) {
            // set the owning side to null (unless already changed)
            if ($hiking->getAgence() === $this) {
                $hiking->setAgence(null);
            }
        }

        return $this;
    }

}
