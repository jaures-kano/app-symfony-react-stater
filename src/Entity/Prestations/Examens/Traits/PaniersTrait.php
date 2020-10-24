<?php


namespace App\Entity\Prestations\Examens\Traits;


/**
 * Class PaniersTrait
 * @package App\Entity\Prestations\Examens\Traits
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait PaniersTrait
{

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $matricule;

    /**
     *
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $quotePart;

    /**
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $ReduxClinique;

    /**
     * @return string
     */
    public function getMatricule(): string
    {
        return $this->matricule;
    }

    /**
     * @param string $matricule
     *  @return $this
     */
    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getMontant (): ?float
    {
        return $this->montant;
    }

    public function setMontant (float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getQuotePart (): ?float
    {
        return $this->quotePart;
    }

    public function setQuotePart (?float $quotePart ): self
    {
        $this->quotePart = $quotePart;

        return $this;
    }

    public function getReduxClinique (): ?float
    {
        return $this->ReduxClinique;
    }

    public function setReduxClinique (?float $ReduxClinique): self
    {
        $this->ReduxClinique = $ReduxClinique;

        return $this;
    }

}