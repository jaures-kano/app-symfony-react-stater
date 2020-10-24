<?php


namespace App\Entity\Prestations\Examens\Traits\Commandes;


/**
 * Class ServicesUtilsTrait
 * @package App\Entity\Prestations\Examens\Traits\Commandes
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait ServicesUtilsTrait
{
    /**
     * @ORM\Column(type="float")
     * @var integer
     */
    private $statut;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     * @var integer|null
     */
    private $sendMotif;

    /**
     * @return int
     */
    public function getStatut(): int
    {
        return $this->statut;
    }

    /**
     * @param int $statut
     * @return $this
     */
    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSendMotif(): ?int
    {
        return $this->sendMotif;
    }

    /**
     * @param int|null $sendMotif
     * @return $this
     */
    public function setSendMotif(?int $sendMotif): self
    {
        $this->sendMotif = $sendMotif;

        return $this;
    }


}