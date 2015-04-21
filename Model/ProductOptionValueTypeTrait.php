<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\TypeTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait ProductOptionValueTypeTrait
{
    use TypeTrait;

    /**
     * @var ArrayCollection<ProductOptionValueInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductOptionValue", mappedBy="value")
     */
    private $values;

    /**
     * {@inheritdoc}
     */
    public function getValues()
    {
        if (is_null($this->values)) $this->values = new ArrayCollection();

        return $this->values;
    }

    /**
     * {@inheritdoc}
     */
    public function addValue(ProductOptionValueInterface $value)
    {
        if (is_null($this->values)) $this->values = new ArrayCollection();
        $this->values->add($value);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeValue(ProductOptionValueInterface $value)
    {
        if (is_null($this->values)) $this->values = new ArrayCollection();
        $this->values->removeElement($value);
    }
}
