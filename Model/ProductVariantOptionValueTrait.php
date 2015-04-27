<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductVariantOptionValueTrait
{
    use IdTrait;

    /**
     * @var ProductOptionValueTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductOptionValueType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $value;

    /**
     * @var ProductOptionTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductOptionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $option;

    /**
     * @var ProductVariantInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductVariant", inversedBy="optionValues")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;


    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setValue(ProductOptionValueTypeInterface $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * {@inheritdoc}
     */
    public function setOption(ProductOptionTypeInterface $option)
    {
        $this->option = $option;

        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getProductVariant()
    {
        return $this->productVariant;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setProductVariant(ProductVariantInterface $productVariant)
    {
        $this->productVariant = $productVariant;
        
        return $this;
    }
}
