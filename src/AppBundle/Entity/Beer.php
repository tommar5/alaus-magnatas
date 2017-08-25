<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beer
 *
 * @ORM\Table(name="beer")
 * @ORM\Entity
 */
class Beer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Brewery
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Brewery", inversedBy="beers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brewery_id", referencedColumnName="id")
     * })
     */
    private $brewery;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

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
     * @var \AppBundle\Entity\Style
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Style")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="style_id", referencedColumnName="id")
     * })
     */
    private $style;

    /**
     * @var float
     *
     * @ORM\Column(name="abv", type="float", precision=10, scale=0, nullable=true)
     */
    private $abv;

    /**
     * @var float
     *
     * @ORM\Column(name="ibu", type="float", precision=10, scale=0, nullable=true)
     */
    private $ibu;

    /**
     * @var float
     *
     * @ORM\Column(name="srm", type="float", precision=10, scale=0, nullable=true)
     */
    private $srm;

    /**
     * @var integer
     *
     * @ORM\Column(name="upc", type="integer", nullable=true)
     */
    private $upc;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="text", length=65535, nullable=true)
     */
    private $filepath;

    /**
     * @var string
     *
     * @ORM\Column(name="descript", type="text", length=65535, nullable=true)
     */
    private $descript;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_user", type="integer", nullable=true)
     */
    private $addUser;

    /**
     * @var string
     *
     * @ORM\Column(name="last_mod", type="text", length=65535, nullable=true)
     */
    private $lastMod;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Beer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set abv
     *
     * @param float $abv
     *
     * @return Beer
     */
    public function setAbv($abv)
    {
        $this->abv = $abv;

        return $this;
    }

    /**
     * Get abv
     *
     * @return float
     */
    public function getAbv()
    {
        return $this->abv;
    }

    /**
     * Set ibu
     *
     * @param float $ibu
     *
     * @return Beer
     */
    public function setIbu($ibu)
    {
        $this->ibu = $ibu;

        return $this;
    }

    /**
     * Get ibu
     *
     * @return float
     */
    public function getIbu()
    {
        return $this->ibu;
    }

    /**
     * Set srm
     *
     * @param float $srm
     *
     * @return Beer
     */
    public function setSrm($srm)
    {
        $this->srm = $srm;

        return $this;
    }

    /**
     * Get srm
     *
     * @return float
     */
    public function getSrm()
    {
        return $this->srm;
    }

    /**
     * Set upc
     *
     * @param integer $upc
     *
     * @return Beer
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Get upc
     *
     * @return integer
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     *
     * @return Beer
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set descript
     *
     * @param string $descript
     *
     * @return Beer
     */
    public function setDescript($descript)
    {
        $this->descript = $descript;

        return $this;
    }

    /**
     * Get descript
     *
     * @return string
     */
    public function getDescript()
    {
        return $this->descript;
    }

    /**
     * Set addUser
     *
     * @param integer $addUser
     *
     * @return Beer
     */
    public function setAddUser($addUser)
    {
        $this->addUser = $addUser;

        return $this;
    }

    /**
     * Get addUser
     *
     * @return integer
     */
    public function getAddUser()
    {
        return $this->addUser;
    }

    /**
     * Set lastMod
     *
     * @param string $lastMod
     *
     * @return Beer
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
     * Set brewery
     *
     * @param \AppBundle\Entity\Brewery
     * $brewery
     *
     * @return Beer
     */
    public function setBrewery(Brewery $brewery = null)
    {
        $this->brewery = $brewery;

        return $this;
    }

    /**
     * Get brewery
     *
     * @return \AppBundle\Entity\Brewery
     *
     */
    public function getBrewery()
    {
        return $this->brewery;
    }

    /**
     * Set cat
     *
     * @param \AppBundle\Entity\Category $cat
     *
     * @return Beer
     */
    public function setCat(Category $cat = null)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set style
     *
     * @param \AppBundle\Entity\Style $style
     *
     * @return Beer
     */
    public function setStyle(Style $style = null)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return \AppBundle\Entity\Style
     */
    public function getStyle()
    {
        return $this->style;
    }
}
