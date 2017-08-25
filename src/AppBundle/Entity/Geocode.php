<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Geocode
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GeocodeRepository")
 * @ORM\Table(name="geocode")
 */
class Geocode
{
    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     * @Assert\NotBlank()
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     * @Assert\NotBlank()
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="accuracy", type="text", length=65535, nullable=true)
     */
    private $accuracy;

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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Brewery", inversedBy="geocode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brewery_id", referencedColumnName="id")
     * })
     */
    private $brewery;

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Geocode
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Geocode
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set accuracy
     *
     * @param string $accuracy
     *
     * @return Geocode
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * Get accuracy
     *
     * @return string
     */
    public function getAccuracy()
    {
        return $this->accuracy;
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
     * @param \AppBundle\Entity\Brewery $brewery
     *
     * @return Geocode
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
     */
    public function getBrewery()
    {
        return $this->brewery;
    }
}
