<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $contenuReponse = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateReponse = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    private ?Reclamation $idreclamation = null;

    public function __construct()
    {
        $this->idReclamation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuReponse(): ?string
    {
        return $this->contenuReponse;
    }

    public function setContenuReponse(string $contenuReponse): static
    {
        $this->contenuReponse = $contenuReponse;

        return $this;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->dateReponse;
    }

    public function setDateReponse(\DateTimeInterface $dateReponse): static
    {
        $this->dateReponse = $dateReponse;

        return $this;
    }

    public function getIdreclamation(): ?Reclamation
    {
        return $this->idreclamation;
    }

    public function setIdreclamation(?Reclamation $idreclamation): static
    {
        $this->idreclamation = $idreclamation;

        return $this;
    }
}
