<?php

namespace App\Entity;

use App\Repository\SponsorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomSponsor = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $donnation = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'sponsor', targetEntity: Promotion::class)]
    private Collection $promotion_id;

    public function __construct()
    {
        $this->promotion_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSponsor(): ?string
    {
        return $this->nomSponsor;
    }

    public function setNomSponsor(string $nomSponsor): static
    {
        $this->nomSponsor = $nomSponsor;

        return $this;
    }

    public function getDonnation(): ?string
    {
        return $this->donnation;
    }

    public function setDonnation(string $donnation): static
    {
        $this->donnation = $donnation;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function __toString():string{
        return $this->getNomSponsor();
    }

    /**
     * @return Collection<int, Promotion>
     */
    public function getPromotionId(): Collection
    {
        return $this->promotion_id;
    }

    public function addPromotionId(Promotion $promotionId): static
    {
        if (!$this->promotion_id->contains($promotionId)) {
            $this->promotion_id->add($promotionId);
            $promotionId->setSponsor($this);
        }

        return $this;
    }

    public function removePromotionId(Promotion $promotionId): static
    {
        if ($this->promotion_id->removeElement($promotionId)) {
            // set the owning side to null (unless already changed)
            if ($promotionId->getSponsor() === $this) {
                $promotionId->setSponsor(null);
            }
        }

        return $this;
    }
}
