<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $NomUserReclamation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $textReclamation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank]
    #[Assert\GreaterThan("today", message:"Date should be after the current date")]

    private ?\DateTimeInterface $dateReclamation = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUserReclamation(): ?string
    {
        return $this->NomUserReclamation;
    }

    public function setNomUserReclamation(string $NomUserReclamation): static
    {
        $this->NomUserReclamation = $NomUserReclamation;

        return $this;
    }

    public function getTextReclamation(): ?string
    {
        return $this->textReclamation;
    }

    public function setTextReclamation(string $textReclamation): static
    {
        $this->textReclamation = $textReclamation;

        return $this;
    }

    public function getDateReclamation(): ?\DateTimeInterface
    {
        return $this->dateReclamation;
    }

    public function __toString():string{
        return $this->getId();
    }

    public function setDateReclamation(\DateTimeInterface $dateReclamation): static
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    public function getReponse(): ?Reponse
    {
        return $this->reponse;
    }

    public function setReponse(?Reponse $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }
}
