<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use BlackBoxCode\Pando\Bundle\FileBundle\Model\FileInterface;

interface ProductImageInterface extends IdInterface
{
    /**
     * @return boolean
     */
    public function getIsDefault();

    /**
     * @param boolean $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault);

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
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * @param ProductInterface $product
     * @return $this
     */
    public function setProduct(ProductInterface $product);
}
