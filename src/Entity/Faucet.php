<?php

namespace App\Entity;

use App\Entity\Decorator\BaseProduct;
use App\Repository\FaucetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FaucetRepository::class)
 */
class Faucet extends BaseProduct
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provider_reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer_warranty;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $standard;

    public function getProductCategory(): ?string
    {
        return $this->product_category;
    }

    public function setProductCategory(string $product_category): self
    {
        $this->product_category = $product_category;

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

    public function getProviderReference(): ?string
    {
        return $this->provider_reference;
    }

    public function setProviderReference(string $provider_reference): self
    {
        $this->provider_reference = $provider_reference;

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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

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
}
