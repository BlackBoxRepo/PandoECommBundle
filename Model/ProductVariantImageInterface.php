<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use BlackBoxCode\Pando\Bundle\FileBundle\Model\FileInterface;

interface ProductVariantImageInterface extends IdInterface
{
    /**
     * @return ProductImageTypeInterface
     */
    public function getType();

    /**
     * @param ProductImageTypeInterface $type
     * @return $this
     */
    public function setType(ProductImageTypeInterface $type);

    /**
     * @return FileInterface
     */
    public function getFile();

    /**
     * @param FileInterface $file
     * @return $this
     */
    public function setFile(FileInterface $file);

    /**
     * @return ProductVariantInterface
     */
    public function getProductVariant();

    /**
     * @param ProductVariantInterface $productVariant
     * @return $this
     */
    public function setProductVariant(ProductVariantInterface $productVariant);
}
