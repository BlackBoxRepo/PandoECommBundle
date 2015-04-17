<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductImageTrait
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
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    private $isDefault;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="images")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;
}
