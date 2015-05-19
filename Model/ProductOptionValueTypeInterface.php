<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\TypeInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface ProductOptionValueTypeInterface extends TypeInterface
{
    /**
     * @return ArrayCollection<ProductOptionValueInterface>
     */
    public function getValues();

    /**
     * @param ProductOptionValueInterface $value
     * @return $this
     */
    public function addValue(ProductOptionValueInterface $value);

    /**
     * @param ProductOptionValueInterface $value
     */
    public function removeValue(ProductOptionValueInterface $value);
}
