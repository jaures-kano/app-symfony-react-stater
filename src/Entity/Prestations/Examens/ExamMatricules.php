<?php

namespace App\Entity\Prestations\Examens;

use App\Entity\Prestations\Examens\Traits\MatriculesTraiit;
use App\Entity\Produits\Examens\ExamService;
use App\Repository\Prestations\Examens\ExamMatriculesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamMatriculesRepository::class)
 */
class ExamMatricules
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ExamPaniers::class, inversedBy="examMatricules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $panier;

    /**
     * @ORM\ManyToOne(targetEntity=ExamService::class, inversedBy="examMatricules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    use MatriculesTraiit;

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

    public function getService(): ?ExamService
    {
        return $this->service;
    }

    public function setService(?ExamService $service): self
    {
        $this->service = $service;

        return $this;
    }
}
