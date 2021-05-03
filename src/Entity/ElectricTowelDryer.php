<?php

namespace App\Entity;

use App\Entity\Decorator\BaseProduct;
use App\Repository\ElectricTowelDryerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ElectricTowelDryerRepository::class)
 */
class ElectricTowelDryer extends BaseProduct
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $width;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $power;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer_warranty;

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

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

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getProductType(): ?string
    {
        return $this->product_type;
    }

    public function setProductType(string $product_type): self
    {
        $this->product_type = $product_type;

        return $this;
    }

    public function getManufacturerWarranty(): ?string
    {
        return $this->manufacturer_warranty;
    }

    public function setManufacturerWarranty(string $manufacturer_warranty): self
    {
        $this->manufacturer_warranty = $manufacturer_warranty;

        return $this;
    }
}
