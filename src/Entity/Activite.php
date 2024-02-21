<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message:"Veuillez saisir le nom de l'activité.")]
    #[Groups("activites")]
    #[ORM\Column(length: 255)]
    private ?string $nomActivite = null;

    #[Groups("activites")]
    #[Assert\NotBlank(message:"Veuillez saisir la durée valide en min.")]
    #[Assert\Positive(message:"Veuillez saisir une valeur positive.")]
    #[ORM\Column(length: 255)]
    private ?string $dureeActivite = null;


    #[Groups("activites")]
    #[Assert\NotBlank(message:"Veuillez saisir la difficulté de l'activité.")]
    #[ORM\Column(length: 255)]
    private ?string $difficulteActivite = null;

    #[Groups("activites")]
    #[Assert\NotBlank(message:"Veuillez saisir l'image de l'activité.")]
    #[ORM\Column(length: 255)]
    private ?string $imageActivite = null;

    #[Groups("activites")]
    #[Assert\NotBlank(message:"Veuillez saisir la description de l'activité.")]
    #[ORM\Column(length: 255)]
    private ?string $descriptionActivite = null;
    #[ORM\Column(length: 255)]
    private ?string $URLResources = null;

    #[ORM\ManyToMany(targetEntity: Planning::class, mappedBy: 'Activities')]
    private Collection $plannings;



    public function __construct()
    {
        $this->plannings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomActivite(): ?string
    {
        return $this->nomActivite;
    }

    public function setNomActivite(string $nomActivite): static
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    public function getDureeActivite(): ?string
    {
        return $this->dureeActivite;
    }

    public function setDureeActivite(string $dureeActivite): static
    {
        $this->dureeActivite = $dureeActivite;

        return $this;
    }

    public function getDifficulteActivite(): ?string
    {
        return $this->difficulteActivite;
    }

    public function setDifficulteActivite(string $difficulteActivite): static
    {
        $this->difficulteActivite = $difficulteActivite;

        return $this;
    }

    public function getImageActivite(): ?string
    {
        return $this->imageActivite;
    }

    public function setImageActivite(string $imageActivite): static
    {
        $this->imageActivite = $imageActivite;

        return $this;
    }

    public function getDescriptionActivite(): ?string
    {
        return $this->descriptionActivite;
    }

    public function setDescriptionActivite(string $descriptionActivite): static
    {
        $this->descriptionActivite = $descriptionActivite;

        return $this;
    }

    public function getURLResources(): ?string
    {
        return $this->URLResources;
    }

    public function setURLResources(string $URLResources): static
    {
        $this->URLResources = $URLResources;

        return $this;
    }

    /**
     * @return Collection<int, Planning>
     */
    public function getPlannings(): Collection
    {
        return $this->plannings;
    }

    public function addPlanning(Planning $planning): static
    {
        if (!$this->plannings->contains($planning)) {
            $this->plannings->add($planning);
            $planning->addActivity($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): static
    {
        if ($this->plannings->removeElement($planning)) {
            $planning->removeActivity($this);
        }

        return $this;
    }


}
