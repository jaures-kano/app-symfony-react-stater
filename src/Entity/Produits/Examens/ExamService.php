<?php

namespace App\Entity\Produits\Examens;

use App\Entity\Prestations\Examens\ExamMatricules;
use App\Repository\Produits\Examens\ExamServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamServiceRepository::class)
 */
class ExamService
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
     * @ORM\OneToMany(targetEntity=Examens::class, mappedBy="service")
     */
    private $examens;

    /**
     * @ORM\OneToMany(targetEntity=ExamMatricules::class, mappedBy="service")
     */
    private $examMatricules;

    public function __construct()
    {
        $this->examens = new ArrayCollection();
        $this->examMatricules = new ArrayCollection();
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

    /**
     * @return Collection|Examens[]
     */
    public function getExamens(): Collection
    {
        return $this->examens;
    }

    public function addExamen(Examens $examen): self
    {
        if (!$this->examens->contains($examen)) {
            $this->examens[] = $examen;
            $examen->setService($this);
        }

        return $this;
    }

    public function removeExamen(Examens $examen): self
    {
        if ($this->examens->contains($examen)) {
            $this->examens->removeElement($examen);
            // set the owning side to null (unless already changed)
            if ($examen->getService() === $this) {
                $examen->setService(null);
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
            $examMatricule->setService($this);
        }

        return $this;
    }

    public function removeExamMatricule(ExamMatricules $examMatricule): self
    {
        if ($this->examMatricules->contains($examMatricule)) {
            $this->examMatricules->removeElement($examMatricule);
            // set the owning side to null (unless already changed)
            if ($examMatricule->getService() === $this) {
                $examMatricule->setService(null);
            }
        }

        return $this;
    }
}
