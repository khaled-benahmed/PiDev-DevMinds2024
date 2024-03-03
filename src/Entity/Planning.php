<?php

namespace App\Entity;

use App\Repository\PlanningRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\Column;

#[ORM\Entity(repositoryClass: PlanningRepository::class)]
class Planning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: "Vous n'avez pas saisi le titre de planning.")]
    #[ORM\Column(length: 255)]
    private ?string $Titre = null;

    #[Assert\NotBlank(message: "Vous n'avez pas saisi la date.")]
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datePlanning = null;

    #[Assert\NotBlank(message: "Vous n'avez pas saisi le jour.")]
    #[ORM\Column(length: 255)]
    private ?string $jourPlanning = null;

    #[Assert\NotBlank(message: "Vous n'avez pas saisi l'heure de debut.")]
    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $startTime = null;

    #[Assert\NotBlank(message: "Vous n'avez pas saisi l'heure de fin.")]
    #[Assert\Expression(
        "this.getEndTime() > this.getStartTime()",
        "L'heure de fin doit être supérieure à l'heure de début."
    )]
    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $endTime = null;

    #[Assert\NotBlank(message: "Vous n'avez pas saisi status.")]
    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToMany(targetEntity: Activite::class, inversedBy: 'plannings')]
    private Collection $activities;

    public function __construct()
    {
        $this->activities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): static
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getDatePlanning(): ?\DateTimeInterface
    {
        return $this->datePlanning;
    }

    public function setDatePlanning(\DateTimeInterface $datePlanning): static
    {
        $this->datePlanning = $datePlanning;

        return $this;
    }

    public function getJourPlanning(): ?string
    {
        return $this->jourPlanning;
    }

    public function setJourPlanning(string $jourPlanning): static
    {
        $this->jourPlanning = $jourPlanning;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): static
    {
        $this->endTime = $endTime;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, Activite>
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(Activite $activity): static
    {
        if (!$this->activities->contains($activity)) {
            $this->activities->add($activity);
        }

        return $this;
    }

    public function removeActivity(Activite $activity): static
    {
        $this->activities->removeElement($activity);

        return $this;
    }
}
