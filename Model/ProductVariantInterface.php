<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface ProductVariantInterface extends \BlackBoxCode\Pando\ProductSaleBundle\Model\ProductVariantInterface
{
    /**
     * @return ArrayCollection<ProductVariantImageInterface>
     */
    public function getImages();

    /**
     * @param ProductVariantImageInterface $image
     * @return $this
     */
    public function addImage(ProductVariantImageInterface $image);

    /**
     * @param ProductVariantImageInterface $image
     */
    public function removeImage(ProductVariantImageInterface $image);

    /**
     * @return ArrayCollection<ProductVariantOptionInterface>
     */
    public function getOptionValues();

    /**
     * @param ProductVariantOptionValueInterface $optionValue
     * @return $this
     */
    public function addOptionValue(ProductVariantOptionValueInterface $optionValue);

    /**
     * @param ProductVariantOptionValueInterface $optionValue
     */
    public function removeOptionValue(ProductVariantOptionValueInterface $optionValue);

    /**
     * @return ArrayCollection<ProductVariantPriceInterface>
     */
    public function getPrices();

    /**
     * @param ProductVariantPriceInterface $price
     * @return $this
     */
    public function addPrice(ProductVariantPriceInterface $price);

    /**
     * @param ProductVariantPriceInterface $price
     */
    public function removePrice(ProductVariantPriceInterface $price);
}
