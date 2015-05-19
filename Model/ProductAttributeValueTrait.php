<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"product_id", "type_id"})})
 */
trait ProductAttributeValueTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    private $value;

    /**
     * @var ProductAttributeTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductAttributeType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @var ProductInterface
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="attributeValues")
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
    public function setType(ProductAttributeTypeInterface $type)
    {
        $this->type = $type;

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
