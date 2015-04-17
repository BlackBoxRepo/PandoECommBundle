<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductOptionValueTrait
{
    use BaseTrait;

    /**
     * @ORM\ManyToOne(targetEntity="ProductOptionValueType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="ProductOptionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $option;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="optionValues")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;
}
