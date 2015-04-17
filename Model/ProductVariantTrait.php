<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait ProductVariantTrait
{
    /**
     * @ORM\OneToMany(targetEntity="ProductVariantImage", mappedBy="productVariant")
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="ProductVariantOptionValue", mappedBy="productVariant")
     */
    private $optionValues;

    /**
     * @ORM\OneToMany(targetEntity="ProductVariantPrice", mappedBy="productVariant")
     */
    private $prices;
}
