<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le nom est un champ obligatoire")]

    private ?string $nom_a = null;



    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"La description est un champ obligatoire")]


    private ?string $description_a = null;

    #[ORM\Column]
    #[Assert\Regex(pattern:"/^[0-9]+$/", message:"Le prix '{{ value }}' ne doit contenir que des chiffres")]
    #[Assert\Positive(message:"Le prix doit être positif")]
    private ?int $prix_a = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    #[Assert\NotBlank(message:"La date est un champ obligatoire")]
    #[Assert\Type('\DateTimeInterface', message: "La date '{{ value }}' n'est pas une date valide.")]
    #[Assert\GreaterThan("today", message:"La date de début doit être ultérieure à aujourd'hui")]
    private ?\DateTimeImmutable $date_debut_a = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    #[Assert\NotBlank(message:"La date est un champ obligatoire")]
    #[Assert\Type('\DateTimeInterface', message: "La date '{{ value }}' n'est pas une date valide.")]
    #[Assert\GreaterThan("today", message:"La date de début doit être ultérieure à aujourd'hui")]
    private ?\DateTimeImmutable $date_fin_a = null;

    #[ORM\ManyToOne(inversedBy: 'abonments')]
    private ?CategorieAbonnements $categorieAbonnements = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomA(): ?string
    {
        return $this->nom_a;
    }

    public function setNomA(string $nom_a): static
    {
        $this->nom_a = $nom_a;

        return $this;
    }


    public function getDescriptionA(): ?string
    {
        return $this->description_a;
    }

    public function setDescriptionA(string $description_a): static
    {
        $this->description_a = $description_a;

        return $this;
    }

    public function getPrixA(): ?int
    {
        return $this->prix_a;
    }

    public function setPrixA(int $prix_a): static
    {
        $this->prix_a = $prix_a;

        return $this;
    }

    public function getDateDebutA(): ?\DateTimeImmutable
    {
        return $this->date_debut_a;
    }

    public function setDateDebutA(\DateTimeImmutable $date_debut_a): static
    {
        $this->date_debut_a = $date_debut_a;

        return $this;
    }

    public function getDateFinA(): ?\DateTimeImmutable
    {
        return $this->date_fin_a;
    }

    public function setDateFinA(\DateTimeImmutable $date_fin_a): static
    {
        $this->date_fin_a = $date_fin_a;

        return $this;
    }

    public function getCategorieAbonnements(): ?CategorieAbonnements
    {
        return $this->categorieAbonnements;
    }

    public function setCategorieAbonnements(?CategorieAbonnements $categorieAbonnements): static
    {
        $this->categorieAbonnements = $categorieAbonnements;

        return $this;
    }
}
