<?php


namespace App\Entity\Decorator;


use App\Entity\Component\ProductComponent;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\OneToOne;

/** @MappedSuperclass */
class BaseProduct extends ProductComponent
{
    /**
     * @OneToOne(targetEntity="App\Entity\Component\ProductComponent", cascade={"all"})
     * @JoinColumn(name="product", referencedColumnName="id")
     */
    protected $product;

    public function __construct(ProductComponent $productComponent)
    {
        $this->setProduct($productComponent);
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }

}