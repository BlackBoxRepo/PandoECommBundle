<?php
namespace BlackBoxCode\Pando\ECommBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait ProductTrait
{
    /**
     * @var ArrayCollection<ProductImageInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductImage", mappedBy="product")
     */
    private $images;

    /**
     * @var ArrayCollection<ProductAttributeValueInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductAttributeValue", mappedBy="product")
     */
    private $attributeValues;

    /**
     * @var ArrayCollection<ProductOptionValueInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductOptionValue", mappedBy="product")
     */
    private $optionValues;

    /**
     * @var ArrayCollection<ProductCategoryInterface>
     *
     * @ORM\ManyToMany(targetEntity="ProductCategory", mappedBy="products")
     */
    private $categories;


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
    public function addImage(ProductImageInterface $image)
    {
        if (is_null($this->images)) $this->images = new ArrayCollection();
        $this->images->add($image);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(ProductImageInterface $image)
    {
        if (is_null($this->images)) $this->images = new ArrayCollection();
        $this->images->removeElement($image);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeValues()
    {
        if (is_null($this->attributeValues)) $this->attributeValues = new ArrayCollection();

        return $this->attributeValues;
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeValue(ProductAttributeValueInterface $attributeValue)
    {
        if (is_null($this->attributeValues)) $this->attributeValues = new ArrayCollection();
        $this->attributeValues->add($attributeValue);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAttributeValue(ProductAttributeValueInterface $attributeValue)
    {
        if (is_null($this->attributeValues)) $this->attributeValues = new ArrayCollection();
        $this->attributeValues->removeElement($attributeValue);
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
    public function addOptionValue(ProductOptionValueInterface $optionValue)
    {
        if (is_null($this->optionValues)) $this->optionValues = new ArrayCollection();
        $this->optionValues->add($optionValue);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeOptionValue(ProductOptionValueInterface $optionValue)
    {
        if (is_null($this->optionValues)) $this->optionValues = new ArrayCollection();
        $this->optionValues->removeElement($optionValue);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getCategories()
    {
        if (is_null($this->categories)) $this->categories = new ArrayCollection();
        
        return $this->categories;
    }
    
    /**
     * {@inheritdoc}
     */
    public function addCategory(ProductCategoryInterface $category)
    {
        if (is_null($this->categories)) $this->categories = new ArrayCollection();
        $this->categories->add($category);
    
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function removeCategory(ProductCategoryInterface $category)
    {
        if (is_null($this->categories)) $this->categories = new ArrayCollection();
        $this->categories->removeElement($category);
    }
}
