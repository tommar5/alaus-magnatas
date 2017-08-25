<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Style
 *
 * @ORM\Table(name="style")
 * @ORM\Entity
 */
class Style
{
    /**
     * @var \AppBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_id", referencedColumnName="id")
     * })
     */
    private $cat;

    /**
     * @var string
     *
     * @ORM\Column(name="style_name", type="text", length=65535, nullable=true)
     */
    private $styleName;

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
     * @var Beer[]
     *
     * @OneToMany(targetEntity="Beer", mappedBy="style")
     */
    private $beers;

    public function __construct()
    {
        $this->beers = new ArrayCollection();
    }

    /**
     * Set catId
     *
     * @param \AppBundle\Entity\Category $cat
     *
     * @return Style
     */
    public function setCat($cat = null)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get catId
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set styleName
     *
     * @param string $styleName
     *
     * @return Style
     */
    public function setStyleName($styleName)
    {
        $this->styleName = $styleName;

        return $this;
    }

    /**
     * Get styleName
     *
     * @return string
     */
    public function getStyleName()
    {
        return $this->styleName;
    }

    /**
     * Set lastMod
     *
     * @param string $lastMod
     *
     * @return Style
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
