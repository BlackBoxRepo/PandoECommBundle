<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductAttributeValueTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="ProductAttributeType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="attributeValues")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;
}
