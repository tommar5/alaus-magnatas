<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Brewery
 *
 * @ORM\Table(name="brewery")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BreweryRepository")
 */
class Brewery
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var Beer[]
     *
     * @OneToMany(targetEntity="AppBundle\Entity\Beer", mappedBy="brewery")
     */
    private $beers;

    /**
     * @var Geocode
     *
     * @OneToOne(targetEntity="Geocode", mappedBy="brewery")
     */
    private $geocode;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="text", length=65535, nullable=true)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="text", length=65535, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="text", length=65535, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="text", length=65535, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text", length=65535, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="text", length=65535, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="text", length=65535, nullable=true)
     */
    private $website;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function __construct(){
        $this->beers = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Brewery
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
     * Get Geocode
     *
     * @return Geocode
     */
    public function getGeocode(){
        return $this->geocode;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Brewery
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Brewery
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Brewery
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Brewery
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Brewery
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Brewery
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Brewery
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Brewery
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     *
     * @return Brewery
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
     * @return Brewery
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
     * @return Brewery
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
     * @return Brewery
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
