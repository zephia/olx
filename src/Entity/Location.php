<?php
/*
 * This file is part of the OLX Feed Generator package.
 *
 * (c) Zephia <info@zephia.com.ar>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zephia\OLXFeed\Entity;

use Zephia\OLXFeed\Exception\LogicException;

/**
 * Class Location
 *
 * @package Zephia\OLXFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Location extends Entity
{
    /**
     * @var string
     */
    private $city = '';

    /**
     * @var string
     */
    private $country = '';

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $neighborhood;

    /**
     * @var string
     */
    private $state = '';

    /**
     * Get City
     *
     * @return string
     */
    public function getCity()
    {
        if (empty($this->city)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'city')
            );
        }
        return $this->city;
    }

    /**
     * Set City
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity(string $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get Country
     *
     * @return string
     */
    public function getCountry()
    {
        if (empty($this->country)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'country')
            );
        }
        return $this->country;
    }

    /**
     * Set Country
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get Latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set Latitude
     *
     * @param float $latitude
     *
     * @return $this
     */
    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Get Longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set Longitude
     *
     * @param float $longitude
     *
     * @return $this
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Get Neighborhood
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set Neighborhood
     *
     * @param string $neighborhood
     *
     * @return $this
     */
    public function setNeighborhood(string $neighborhood)
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * Get State
     *
     * @return string
     */
    public function getState()
    {
        if (empty($this->state)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'state')
            );
        }
        return $this->state;
    }

    /**
     * Set State
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = $state;
        return $this;
    }
}
