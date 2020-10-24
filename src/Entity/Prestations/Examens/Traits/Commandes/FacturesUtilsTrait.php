<?php


namespace App\Entity\Prestations\Examens\Traits\Commandes;


/**
 * Class FacturesUtilsTrait
 * @package App\Entity\Prestations\Examens\Traits\Commandes
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait FacturesUtilsTrait
{

    /**
     * @ORM\Column(type="float", nullable=true)\
     * @var float|null
     */
    private $reduction;

    /**
     * @ORM\Column(type="integer", nullable=true)\
     * @var integer|null
     */
    private $quantite;

    /**
     * @return int|null
     */
    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    /**
     * @param int|null $quantite
     * @return $this
     */
    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }


    public function getReduction (): ?float
    {
        return $this->reduction;
    }

    /**
     * @param float|null $reduction
     * @return $this
     */
    public function setReduction (?float $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }
}