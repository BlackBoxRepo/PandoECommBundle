<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use BlackBoxCode\Pando\ProductSaleBundle\Model\ProductPriceTypeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductVariantPriceTrait
{
    use IdTrait;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    private $value;

    /**
     * @var ProductPriceTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductPriceType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @var ProductVariantInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductVariant", inversedBy="prices")
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
    public function setValue($value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setType(ProductPriceTypeInterface $type)
    {
        $this->type = $type;
        
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
