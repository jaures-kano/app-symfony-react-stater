<?php


namespace App\Entity\Prestations\Examens\Traits\Commandes;


use DateTimeInterface;

/**
 * Class DateUtilsTrait
 * @package App\Entity\Prestations\Examens\Traits\Commandes
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait DateUtilsTrait
{

    /**
     *
     * @ORM\Column(type="datetime" , nullable=true )
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     *
     * @ORM\Column(type="datetime" , nullable=true )
     * @var DateTimeInterface|null
     */
    private $recieveAt;

    /**
     *
     * @ORM\Column(type="datetime" , nullable=true )
     * @var DateTimeInterface|null
     */
    private $sendAt;

    /**
     *
     * @ORM\Column(type="datetime" , nullable=true )
     * @var DateTimeInterface|null
     */
    private $promiseAt;

    /**
     *
     * @ORM\Column(type="datetime" , nullable=true )
     * @var DateTimeInterface|null
     */
    private $finishAt;

    /**
     *
     * @ORM\Column(type="datetime" , nullable=true )
     * @var DateTimeInterface|null
     */
    private $callAt;


    public function getCreatedAt (): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAtAt (DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getRecieveAt(): ?DateTimeInterface
    {
        return $this->recieveAt;
    }

    /**
     * @param DateTimeInterface|null $recieveAt
     */
    public function setRecieveAt(?DateTimeInterface $recieveAt): void
    {
        $this->recieveAt = $recieveAt;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getSendAt(): ?DateTimeInterface
    {
        return $this->sendAt;
    }

    /**
     * @param DateTimeInterface|null $sendAt
     */
    public function setSendAt(?DateTimeInterface $sendAt): ?DateTimeInterface
    {
        $this->sendAt = $sendAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getPromiseAt(): ?DateTimeInterface
    {
        return $this->promiseAt;
    }

    /**
     * @param DateTimeInterface|null $promiseAt
     */
    public function setPromiseAt(?DateTimeInterface $promiseAt): ?DateTimeInterface
    {
        $this->promiseAt = $promiseAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getFinishAt(): ?DateTimeInterface
    {
        return $this->finishAt;
    }

    /**
     * @param DateTimeInterface|null $finishAt
     */
    public function setFinishAt(?DateTimeInterface $finishAt): ?DateTimeInterface
    {
        $this->finishAt = $finishAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCallAt(): ?DateTimeInterface
    {
        return $this->callAt;
    }

    /**
     * @param DateTimeInterface|null $callAt
     */
    public function setCallAt(?DateTimeInterface $callAt): ?DateTimeInterface
    {
        $this->callAt = $callAt;

        return $this;
    }



}