<?php

namespace App\Entity;

use App\Entity\Decorator\BaseProduct;
use App\Repository\BathroomSinkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BathroomSinkRepository::class)
 */
class BathroomSink extends BaseProduct
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_type;


    public function getProductType(): ?string
    {
        return $this->product_type;
    }

    public function setProductType(string $product_type): self
    {
        $this->product_type = $product_type;

        return $this;
    }
}
