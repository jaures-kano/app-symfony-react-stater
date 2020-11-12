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


<<<<<<< HEAD
    public function getNom (): ?string
=======
    public function getNom(): ?string
>>>>>>> dev-front
    {
        return $this->nom;
    }

<<<<<<< HEAD
    public function setNom (string $nom): self
=======
    public function setNom(string $nom): self
>>>>>>> dev-front
    {
        $this->nom = $nom;

        return $this;
    }

<<<<<<< HEAD
    public function getPrenom (): ?string
=======
    public function getPrenom(): ?string
>>>>>>> dev-front
    {
        return $this->prenom;
    }

<<<<<<< HEAD
    public function setPrenom (?string $prenom): self
=======
    public function setPrenom(?string $prenom): self
>>>>>>> dev-front
    {
        $this->prenom = $prenom;

        return $this;
    }


}