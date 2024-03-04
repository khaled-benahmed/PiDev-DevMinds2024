<?php

namespace App\Entity;

use App\Repository\CategorieAbonnementsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorieAbonnementsRepository::class)]
class CategorieAbonnements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le Nom est un champ obligatoire")]
    private ?string $nom_categorie = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"La description est un champ obligatoire")]
    private ?string $description_c = null;

    #[ORM\OneToMany(mappedBy: 'categorieAbonnements', targetEntity: Abonnement::class)]
    private Collection $abonments;

    public function __construct()
    {
        $this->abonments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nom_categorie;
    }

    public function setNomCategorie(string $nom_categorie): static
    {
        $this->nom_categorie = $nom_categorie;

        return $this;
    }

    public function getDescriptionC(): ?string
    {
        return $this->description_c;
    }

    public function setDescriptionC(string $description_c): static
    {
        $this->description_c = $description_c;

        return $this;
    }

    /**
     * @return Collection<int, Abonnement>
     */
    public function getAbonments(): Collection
    {
        return $this->abonments;
    }

    public function addAbonment(Abonnement $abonment): static
    {
        if (!$this->abonments->contains($abonment)) {
            $this->abonments->add($abonment);
            $abonment->setCategorieAbonnements($this);
        }

        return $this;
    }

    public function removeAbonment(Abonnement $abonment): static
    {
        if ($this->abonments->removeElement($abonment)) {
            // set the owning side to null (unless already changed)
            if ($abonment->getCategorieAbonnements() === $this) {
                $abonment->setCategorieAbonnements(null);
            }
        }

        return $this;
    }
}
