<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductPriceTypeInterface;

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
