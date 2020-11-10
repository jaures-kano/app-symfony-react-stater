<?php

namespace App\Entity\Produits\Examens;

use App\Entity\Prestations\Examens\ExamCommandes;
use App\Repository\Produits\Examens\ExamensRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamensRepository::class)
 */
class Examens
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=ExamService::class, inversedBy="examens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    /**
     * @ORM\OneToMany(targetEntity=ExamCommandes::class, mappedBy="examen")
     */
    private $examCommandes;

    public function __construct()
    {
        $this->examCommandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getService(): ?ExamService
    {
        return $this->service;
    }

    public function setService(?ExamService $service): self
    {
        $this->service = $service;

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
            $examCommande->setExamen($this);
        }

        return $this;
    }

    public function removeExamCommande(ExamCommandes $examCommande): self
    {
        if ($this->examCommandes->contains($examCommande)) {
            $this->examCommandes->removeElement($examCommande);
            // set the owning side to null (unless already changed)
            if ($examCommande->getExamen() === $this) {
                $examCommande->setExamen(null);
            }
        }

        return $this;
    }
}
