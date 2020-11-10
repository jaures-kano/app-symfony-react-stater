<?php


namespace App\Entity\Prestations\Examens\Traits\Patient;


/**
 * Class InfoPatientTrait
 * @package App\Entity\Prestations\Examens\Traits\Patient
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait InfoPatientTrait
{

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $contact;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $autreContact;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $sexe;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $localisation;

    /**
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $ddr;

    /**
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $observationClinique;


    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(?int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getAutreContact(): ?int
    {
        return $this->autreContact;
    }

    public function setAutreContact(?int $autreContact): self
    {
        $this->autreContact = $autreContact;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?int $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getDdr(): ?DateTimeInterface
    {
        return $this->ddr;
    }

    public function setDdr(?DateTimeInterface $ddr): self
    {
        $this->ddr = $ddr;

        return $this;
    }

    public function getObservationClinique(): ?string
    {
        return $this->observationClinique;
    }

    public function setObservationClinique(?string $observationClinique): self
    {
        $this->observationClinique = $observationClinique;

        return $this;
    }

}