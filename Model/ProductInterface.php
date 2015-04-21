<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

interface ProductInterface extends \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductInterface
{
    /**
     * @return ArrayCollection<ProductImageInterface>
     */
    public function getImages();

    /**
     * @param ProductImageInterface $image
     * @return $this
     */
    public function addImage(ProductImageInterface $image);

    /**
     * @param ProductImageInterface $image
     */
    public function removeImage(ProductImageInterface $image);

    /**
     * @return ArrayCollection<ProductAttributeValueInterface>
     */
    public function getAttributeValues();

    /**
     * @param ProductAttributeValueInterface $attributeValue
     * @return $this
     */
    public function addAttributeValue(ProductAttributeValueInterface $attributeValue);

    /**
     * @param ProductAttributeValueInterface $attributeValue
     * @return $this
     */
    public function removeAttributeValue(ProductAttributeValueInterface $attributeValue);

    /**
     * @return ArrayCollection<ProductOptionValueInterface>
     */
    public function getOptionValues();

    /**
     * @param ProductOptionValueInterface $optionValue
     * @return $this
     */
    public function addOptionValue(ProductOptionValueInterface $optionValue);

    /**
     * @param ProductOptionValueInterface $optionValue
     */
    public function removeOptionValue(ProductOptionValueInterface $optionValue);

    /**
     * @return ArrayCollection<ProductCategoryInterface>
     */
    public function getCategories();

    /**
     * @param ProductCategoryInterface $category
     * @return $this
     */
    public function addCategory(ProductCategoryInterface $category);

    /**
     * @param ProductCategoryInterface $category
     */
    public function removeCategory(ProductCategoryInterface $category);
}
