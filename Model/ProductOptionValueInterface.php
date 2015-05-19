<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;

interface ProductOptionValueInterface extends IdInterface
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
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * @param ProductInterface $product
     * @return $this
     */
    public function setProduct(ProductInterface $product);
}
