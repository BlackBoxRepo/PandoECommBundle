<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;

interface ProductAttributeValueInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getValue();

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return ProductAttributeTypeInterface
     */
    public function getType();

    /**
     * {@inheritdoc}
     */
    public function setType(ProductAttributeTypeInterface $type);

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
