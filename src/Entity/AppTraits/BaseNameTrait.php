<?php


namespace App\Entity\AppTraits;


/**
 * Class baseUserTrait
 * @package App\Entity\AppTraits
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait BaseNameTrait
{
    /**
     *
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;



    public function getNom(): ?string
    {
        return $this->nom;
    }


    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

}