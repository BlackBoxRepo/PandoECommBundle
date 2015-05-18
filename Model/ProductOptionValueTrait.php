<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductOptionValueTrait
{
    use IdTrait;

    /**
     * @var ProductOptionValueTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductOptionValueType", inversedBy="values")
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
     * @var ProductInterface
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="optionValues")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;


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
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setProduct(ProductInterface $product)
    {
        $this->product = $product;
        
        return $this;
    }
}
