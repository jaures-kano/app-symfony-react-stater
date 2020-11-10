<?php

namespace App\Entity\Prestations\Examens;

use App\Entity\Prestations\Examens\Traits\PaniersTrait;
use App\Repository\Prestations\Examens\ExamPaniersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamPaniersRepository::class)
 */
class ExamPaniers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ExamPatients::class, inversedBy="paniers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    /**
     * @ORM\OneToMany(targetEntity=ExamCommandes::class, mappedBy="panier")
     */
    private $examCommandes;

    /**
     * @ORM\OneToMany(targetEntity=ExamMatricules::class, mappedBy="panier")
     */
    private $examMatricules;

    /**
     * @ORM\OneToMany(targetEntity=ExamFactures::class, mappedBy="panier")
     */
    private $examFactures;

    use PaniersTrait;

    public function __construct()
    {
        $this->examCommandes = new ArrayCollection();
        $this->examMatricules = new ArrayCollection();
        $this->examFactures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatient(): ?ExamPatients
    {
        return $this->patient;
    }

    public function setPatient(?ExamPatients $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * @return Collection|ExamCommandes[]
     */
    public function getExamCommandes(): Collection
    {
        return $this->examCommandes;
    }

    public function addExamCommande(ExamCommandes $examCommande): self
    {
        if (!$this->examCommandes->contains($examCommande)) {
            $this->examCommandes[] = $examCommande;
            $examCommande->setPanier($this);
        }

        return $this;
    }

    public function removeExamCommande(ExamCommandes $examCommande): self
    {
        if ($this->examCommandes->contains($examCommande)) {
            $this->examCommandes->removeElement($examCommande);
            // set the owning side to null (unless already changed)
            if ($examCommande->getPanier() === $this) {
                $examCommande->setPanier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ExamMatricules[]
     */
    public function getExamMatricules(): Collection
    {
        return $this->examMatricules;
    }

    public function addExamMatricule(ExamMatricules $examMatricule): self
    {
        if (!$this->examMatricules->contains($examMatricule)) {
            $this->examMatricules[] = $examMatricule;
            $examMatricule->setPanier($this);
        }

        return $this;
    }

    public function removeExamMatricule(ExamMatricules $examMatricule): self
    {
        if ($this->examMatricules->contains($examMatricule)) {
            $this->examMatricules->removeElement($examMatricule);
            // set the owning side to null (unless already changed)
            if ($examMatricule->getPanier() === $this) {
                $examMatricule->setPanier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ExamFactures[]
     */
    public function getExamFactures(): Collection
    {
        return $this->examFactures;
    }

    public function addExamFacture(ExamFactures $examFacture): self
    {
        if (!$this->examFactures->contains($examFacture)) {
            $this->examFactures[] = $examFacture;
            $examFacture->setPanier($this);
        }

        return $this;
    }

    public function removeExamFacture(ExamFactures $examFacture): self
    {
        if ($this->examFactures->contains($examFacture)) {
            $this->examFactures->removeElement($examFacture);
            // set the owning side to null (unless already changed)
            if ($examFacture->getPanier() === $this) {
                $examFacture->setPanier(null);
            }
        }

        return $this;
    }
}
