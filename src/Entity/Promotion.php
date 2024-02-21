<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codePromotion = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $reductionPromotion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateExpiration = null;

    #[ORM\ManyToOne(inversedBy: 'promotion_id')]
    private ?Sponsor $sponsor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePromotion(): ?string
    {
        return $this->codePromotion;
    }

    public function setCodePromotion(string $codePromotion): static
    {
        $this->codePromotion = $codePromotion;

        return $this;
    }

    public function getReductionPromotion(): ?string
    {
        return $this->reductionPromotion;
    }

    public function setReductionPromotion(string $reductionPromotion): static
    {
        $this->reductionPromotion = $reductionPromotion;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $dateExpiration): static
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    public function getSponsor(): ?Sponsor
    {
        return $this->sponsor;
    }

    public function setSponsor(?Sponsor $sponsor): static
    {
        $this->sponsor = $sponsor;

        return $this;
    }
}
