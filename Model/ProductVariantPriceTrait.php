<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductVariantPriceTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="float")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="ProductPriceType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="ProductVariant", inversedBy="prices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;
}
