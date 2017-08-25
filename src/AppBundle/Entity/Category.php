<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var string
     *
     * @ORM\Column(name="cat_name", type="text", length=65535, nullable=true)
     */
    private $catName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_mod", type="text", length=65535, nullable=true)
     */
    private $lastMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Beer
     *
     * @ORM\OneToMany(targetEntity="Beer", mappedBy="category")
     */
    private $beers;

    public function __construct() {
        $this->beers = new ArrayCollection();
    }

    /**
     * Set catName
     *
     * @param string $catName
     *
     * @return Category
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;

        return $this;
    }

    /**
     * Get catName
     *
     * @return string
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * Set lastMod
     *
     * @param string $lastMod
     *
     * @return Category
     */
    public function setLastMod($lastMod)
    {
        $this->lastMod = $lastMod;

        return $this;
    }

    /**
     * Get lastMod
     *
     * @return string
     */
    public function getLastMod()
    {
        return $this->lastMod;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Beer[]|ArrayCollection
     */
    public function getBeers()
    {
        return $this->beers;
    }

    /**
     * @param Beer[]|ArrayCollection $beers
     */
    public function setBeers($beers)
    {
        $this->beers = $beers;
    }
}
