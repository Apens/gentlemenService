<?php


namespace App\Entity\Component;

use App\Entity\Category;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;


/**
 * @ORM\Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"Product" = "App\Entity\Product",
 *     "WaterHeater" = "App\Entity\Waterheater",
 *     "BathroomSink"= "App\Entity\BathroomSink",
 *     "Bathtub"= "App\Entity\Bathtub",
 *     "Faucet"= "App\Entity\Faucet",
 *     "Shower"= "App\Entity\Shower",
 *     "Toilet"= "App\Entity\Toilet",
 *     "ElectricHeater"= "App\Entity\ElectricHeater",
 *     "ElectricTowelDryer"= "App\Entity\ElectricTowelDryer",
 *     "SwitchBoard"= "App\Entity\SwitchBoard",
 *  })
 */
abstract class ProductComponent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_alt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_title;

    /**
     * @ORM\Column(type="text")
     */
    private $meta_desc;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $installation_price;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $delivery_price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getImageAlt(): ?string
    {
        return $this->image_alt;
    }

    public function setImageAlt(string $image_alt): self
    {
        $this->image_alt = $image_alt;

        return $this;
    }

    public function getImageTitle(): ?string
    {
        return $this->image_title;
    }

    public function setImageTitle(string $image_title): self
    {
        $this->image_title = $image_title;

        return $this;
    }

    public function getMetaDesc(): ?string
    {
        return $this->meta_desc;
    }

    public function setMetaDesc(string $meta_desc): self
    {
        $this->meta_desc = $meta_desc;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInstallationPrice(): ?string
    {
        return $this->installation_price;
    }

    public function setInstallationPrice(string $installation_price): self
    {
        $this->installation_price = $installation_price;

        return $this;
    }

    public function getDeliveryPrice(): ?string
    {
        return $this->delivery_price;
    }

    public function setDeliveryPrice(string $delivery_price): self
    {
        $this->delivery_price = $delivery_price;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}