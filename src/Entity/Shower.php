<?php

namespace App\Entity;

use App\Entity\Decorator\BaseProduct;
use App\Repository\ShowerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShowerRepository::class)
 */
class Shower extends BaseProduct
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $length;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $width;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $height;


    public function getLength(): ?string
    {
        return $this->length;
    }

    public function setLength(string $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }
}
