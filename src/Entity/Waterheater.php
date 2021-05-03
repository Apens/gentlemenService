<?php

namespace App\Entity;

use App\Entity\Decorator\BaseProduct;
use App\Repository\WaterheaterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WaterheaterRepository::class)
 */
class Waterheater extends BaseProduct
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
    private $diameter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $power;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $capacity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $weight;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $standard;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_cat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer_reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer_warranty;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recommended_use;

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

    public function getDiameter(): ?string
    {
        return $this->diameter;
    }

    public function setDiameter(string $diameter): self
    {
        $this->diameter = $diameter;

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

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getCapacity(): ?string
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getStandard(): ?string
    {
        return $this->standard;
    }

    public function setStandard(string $standard): self
    {
        $this->standard = $standard;

        return $this;
    }

    public function getProductCat(): ?string
    {
        return $this->product_cat;
    }

    public function setProductCat(string $product_cat): self
    {
        $this->product_cat = $product_cat;

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

    public function getManufacturerReference(): ?string
    {
        return $this->manufacturer_reference;
    }

    public function setManufacturerReference(string $manufacturer_reference): self
    {
        $this->manufacturer_reference = $manufacturer_reference;

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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getRecommendedUse(): ?string
    {
        return $this->recommended_use;
    }

    public function setRecommendedUse(string $recommended_use): self
    {
        $this->recommended_use = $recommended_use;

        return $this;
    }
}
