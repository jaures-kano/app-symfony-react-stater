<?php


namespace App\Entity\Prestations\Examens\Traits;


/**
 * Class MatriculesTraiit
 * @package App\Entity\Prestations\Examens\Traits
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait MatriculesTraiit
{

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $statut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $renvois;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $eligible;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreResulat;

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(?int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getRenvois(): ?int
    {
        return $this->renvois;
    }

    public function setRenvois(?int $renvois): self
    {
        $this->renvois = $renvois;

        return $this;
    }

    public function getEligible(): ?int
    {
        return $this->eligible;
    }

    public function setEligible(?int $eligible): self
    {
        $this->eligible = $eligible;

        return $this;
    }

    public function getNombreResulat(): ?int
    {
        return $this->nombreResulat;
    }

    public function setNombreResulat(?int $nombreResulat): self
    {
        $this->nombreResulat = $nombreResulat;

        return $this;
    }
}