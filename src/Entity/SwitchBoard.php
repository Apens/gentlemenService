<?php

namespace App\Entity;

use App\Entity\Decorator\BaseProduct;
use App\Repository\SwitchBoardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SwitchBoardRepository::class)
 */
class SwitchBoard extends BaseProduct
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recommended_use;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer_reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer_warranty;


    public function getRecommendedUse(): ?string
    {
        return $this->recommended_use;
    }

    public function setRecommendedUse(string $recommended_use): self
    {
        $this->recommended_use = $recommended_use;

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
}
