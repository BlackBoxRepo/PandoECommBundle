<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;
use BlackBoxCode\Pando\ProductSaleBundle\Model\ProductPriceTypeInterface;

interface ProductVariantPriceInterface extends IdInterface
{
    /**
     * @return float
     */
    public function getValue();

    /**
     * @param float $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return ProductPriceTypeInterface
     */
    public function getType();

    /**
     * @param ProductPriceTypeInterface $type
     * @return $this
     */
    public function setType(ProductPriceTypeInterface $type);

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
