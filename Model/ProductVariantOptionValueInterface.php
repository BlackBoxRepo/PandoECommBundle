<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;

interface ProductVariantOptionValueInterface extends IdInterface
{
    /**
     * @return ProductOptionValueTypeInterface
     */
    public function getValue();

    /**
     * @param ProductOptionValueTypeInterface $value
     * @return $this
     */
    public function setValue(ProductOptionValueTypeInterface $value);

    /**
     * @return ProductOptionTypeInterface
     */
    public function getOption();

    /**
     * @param ProductOptionTypeInterface $option
     * @return $this
     */
    public function setOption(ProductOptionTypeInterface $option);

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
