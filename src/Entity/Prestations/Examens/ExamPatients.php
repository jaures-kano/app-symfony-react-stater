<?php

namespace App\Entity\Prestations\Examens;

use App\Entity\Prestations\Examens\Traits\Patient\ComplementTrait;
use App\Entity\Prestations\Examens\Traits\Patient\InfoPatientTrait;
use App\Repository\Prestations\Examens\ExamPatientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamPatientsRepository::class)
 */
class ExamPatients
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=ExamPaniers::class, mappedBy="patient")
     */
    private $paniers;

    use InfoPatientTrait;
    use ComplementTrait;

    public function __construct()
    {
        $this->paniers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|ExamPaniers[]
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(ExamPaniers $panier): self
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers[] = $panier;
            $panier->setPatient($this);
        }

        return $this;
    }

    public function removePanier(ExamPaniers $panier): self
    {
        if ($this->paniers->contains($panier)) {
            $this->paniers->removeElement($panier);
            // set the owning side to null (unless already changed)
            if ($panier->getPatient() === $this) {
                $panier->setPatient(null);
            }
        }

        return $this;
    }
}
