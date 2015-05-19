<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use BlackBoxCode\Pando\FileBundle\Model\FileInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductVariantImageTrait
{
    use IdTrait;

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
     * @var ProductVariantInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductVariant", inversedBy="images")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;


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
