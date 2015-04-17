<?php
namespace BlackBoxCode\Pando\Bundle\ECommBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductOptionValueTypeTrait
{
    use TypeTrait;

    /**
     * @ORM\OneToMany(targetEntity="ProductOptionValue", mappedBy="value")
     */
    private $values;
}
