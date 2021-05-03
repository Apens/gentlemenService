<?php

namespace App\Entity;

use App\Entity\Component\ProductComponent;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;

/**
 * @Entity
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product extends ProductComponent
{

}
