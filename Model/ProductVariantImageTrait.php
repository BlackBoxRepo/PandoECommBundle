<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductVariantImageTrait
{
    use BaseTrait;

    /**
     * @ORM\ManyToOne(targetEntity="ProductImageType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(nullable=false)
     */
    private $file;

    /**
     * @ORM\ManyToOne(targetEntity="ProductVariant", inversedBy="images")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;
}
