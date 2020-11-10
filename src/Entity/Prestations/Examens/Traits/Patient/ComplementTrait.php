<?php

namespace App\Entity\Prestations\Examens\Traits\Patient;

/**
 * Class ComplementTrait
 * @package App\Entity\Prestations\Examens\Traits\Patient
 * @author jaures kano <ruddyjaures@mail.com>
 */
trait ComplementTrait
{
    /**
     * @ORM\Column(type="string")
     */
    private $code;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}