<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait ProductVariantTrait
{
    /**
     * @var ArrayCollection<ProductVariantImageInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductVariantImage", mappedBy="productVariant")
     */
    private $images;

    /**
     * @var ArrayCollection<ProductVariantOptionValueInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductVariantOptionValue", mappedBy="productVariant")
     */
    private $optionValues;

    /**
     * @var ArrayCollection<ProductVariantPriceInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductVariantPrice", mappedBy="productVariant")
     */
    private $prices;


    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        if (is_null($this->images)) $this->images = new ArrayCollection();

        return $this->images;
    }

    /**
     * {@inheritdoc}
     */
    public function addImage(ProductVariantImageInterface $image)
    {
        if (is_null($this->images)) $this->images = new ArrayCollection();
        $this->images->add($image);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(ProductVariantImageInterface $image)
    {
        if (is_null($this->images)) $this->images = new ArrayCollection();
        $this->images->removeElement($image);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionValues()
    {
        if (is_null($this->optionValues)) $this->optionValues = new ArrayCollection();

        return $this->optionValues;
    }

    /**
     * {@inheritdoc}
     */
    public function addOptionValue(ProductVariantOptionValueInterface $optionValue)
    {
        if (is_null($this->optionValues)) $this->optionValues = new ArrayCollection();
        $this->optionValues->add($optionValue);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeOptionValue(ProductVariantOptionValueInterface $optionValue)
    {
        if (is_null($this->optionValues)) $this->optionValues = new ArrayCollection();
        $this->optionValues->removeElement($optionValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrices()
    {
        if (is_null($this->prices)) $this->prices = new ArrayCollection();

        return $this->prices;
    }

    /**
     * {@inheritdoc}
     */
    public function addPrice(ProductVariantPriceInterface $price)
    {
        if (is_null($this->prices)) $this->prices = new ArrayCollection();
        $this->prices->add($price);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removePrice(ProductVariantPriceInterface $price)
    {
        if (is_null($this->prices)) $this->prices = new ArrayCollection();
        $this->prices->removeElement($price);
    }
}
