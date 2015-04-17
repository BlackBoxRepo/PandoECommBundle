<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait ProductTrait
{
    /**
     * @ORM\OneToMany(targetEntity="ProductImage", mappedBy="product")
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="ProductAttributeValue", mappedBy="product")
     */
    private $attributeValues;

    /**
     * @ORM\OneToMany(targetEntity="ProductOptionValue", mappedBy="product")
     */
    private $optionValues;

    /**
     * @ORM\ManyToMany(targetEntity="ProductCategory", mappedBy="products")
     */
    private $categories;
}
