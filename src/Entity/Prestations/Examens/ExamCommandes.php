<?php

namespace App\Entity\Prestations\Examens;

use App\Entity\Prestations\Examens\Traits\Commandes\DateUtilsTrait;
use App\Entity\Prestations\Examens\Traits\Commandes\FacturesUtilsTrait;
use App\Entity\Prestations\Examens\Traits\Commandes\ServicesUtilsTrait;
use App\Entity\Produits\Examens\Examens;
use App\Repository\Prestations\Examens\ExamCommandesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamCommandesRepository::class)
 */
class ExamCommandes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ExamPaniers::class, inversedBy="examCommandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $panier;

    /**
     * @ORM\ManyToOne(targetEntity=Examens::class, inversedBy="examCommandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $examen;

    use DateUtilsTrait;
    use FacturesUtilsTrait;
    use ServicesUtilsTrait;

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

    public function getExamen(): ?Examens
    {
        return $this->examen;
    }

    public function setExamen(?Examens $examen): self
    {
        $this->examen = $examen;

        return $this;
    }
}
