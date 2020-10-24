<?php


namespace App\Entity\Prestations\Examens\Traits;


use DateTimeInterface;

/**
 * Class FacturesTrait
 * @package App\Entity\Prestations\Examens\Traits
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait FacturesTrait
{
    /**
     *
     * @ORM\Column(type="float")
     * @var float
     */
    private $montant;

    /**
     *
     * @ORM\Column(type="float")
     * @var float
     */
    private $montantVerser;

    /**
     *
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $montantRestant;

    /**
     *
     * @ORM\Column(type="date", nullable=true)
     * @var DateTimeInterface|null
     */
    private $echance;

    /**
     *
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $reduction;

    /**
     * @return float
     */
    public function getMontant(): float
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     * @return $this
     */
    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return float
     */
    public function getMontantVerser(): float
    {
        return $this->montantVerser;
    }

    /**
     * @param float $montantVerser
     * @return $this
     */
    public function setMontantVerser(float $montantVerser): self
    {
        $this->montantVerser = $montantVerser;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMontantRestant(): ?float
    {
        return $this->montantRestant;
    }

    /**
     * @param float|null $montantRestant
     * @return $this
     */
    public function setMontantRestant(?float $montantRestant): self
    {
        $this->montantRestant = $montantRestant;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEchance(): ?DateTimeInterface
    {
        return $this->echance;
    }

    /**
     * @param DateTimeInterface|null $echance
     * @return $this
     */
    public function setEchance(?DateTimeInterface $echance): self
    {
        $this->echance = $echance;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getReduction(): ?float
    {
        return $this->reduction;
    }

    /**
     * @param float|null $reduction
     * @return $this
     */
    public function setReduction(?float $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }


}
