<?php

namespace App\Entity\Prestations\Examens;

use App\Entity\Prestations\Examens\Traits\FacturesTrait;
use App\Entity\Utilisateurs;
use App\Repository\Prestations\Examens\ExamFacturesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamFacturesRepository::class)
 */
class ExamFactures
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ExamPaniers::class, inversedBy="examFactures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $panier;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="examFactures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $auteur;

    use FacturesTrait;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPanier(): ?ExamPaniers
    {
        return $this->panier;
    }

    public function setPanier(?ExamPaniers $panier): self
    {
        $this->panier = $panier;

        return $this;
    }

    public function getAuteur(): ?Utilisateurs
    {
        return $this->auteur;
    }

    public function setAuteur(?Utilisateurs $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

}
