<?php


namespace App\Entity\AppTraits;


use DateTimeInterface;

/**
 * Class BaseTimeTrait
 * @package App\Entity\AppTraits
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait BaseTimeTrait
{
    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     *
     * @ORM\Column(type="datetime" , nullable=true)
     */
    private $updatedAt;

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAtAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}