<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use BlackBoxCode\Pando\FileBundle\Model\FileInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductImageTrait
{
    use IdTrait;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    private $isDefault;

    /**
     * @var ProductImageTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductImageType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @var FileInterface
     *
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(nullable=false)
     */
    private $file;

    /**
     * @var ProductInterface
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="images")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    
    /**
     * {@inheritdoc}
     */
    public function getIsDefault()
    {
        return $this->isDefault ? true : false;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        
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
    public function setType(ProductImageTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * {@inheritdoc}
     */
    public function setFile(FileInterface $file)
    {
        $this->file = $file;

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
