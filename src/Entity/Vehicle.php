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
 * Class Vehicle
 *
 * @package Zephia\OLXFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Vehicle extends Ad
{
    /**
     * @var int
     */
    private $color = 0;

    /**
     * @var int
     */
    private $condition = 0;

    /**
     * @var int
     */
    private $fuel = 0;

    /**
     * @var int
     */
    private $make = 0;

    /**
     * @var int
     */
    private $mileage = 0;

    /**
     * @var int
     */
    private $model = 0;

    /**
     * @var int
     */
    private $transmission = 0;

    /**
     * @var int
     */
    private $year = 0;

    /**
     * Get Color
     *
     * @return int
     */
    public function getColor()
    {
        if (empty($this->color)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'color')
            );
        }
        return $this->color;
    }

    /**
     * Set Color
     *
     * @param int $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Get Condition
     *
     * @return int
     */
    public function getCondition()
    {
        if (empty($this->condition)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'condition')
            );
        }
        return $this->condition;
    }

    /**
     * Set Condition
     *
     * @param int $condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Get Fuel
     *
     * @return int
     */
    public function getFuel()
    {
        if (empty($this->fuel)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'fuel')
            );
        }
        return $this->fuel;
    }

    /**
     * Set Fuel
     *
     * @param int $fuel
     *
     * @return $this
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * Get Make
     *
     * @return int
     */
    public function getMake()
    {
        if (empty($this->make)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'make')
            );
        }
        return $this->make;
    }

    /**
     * Set Make
     *
     * @param int $make
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->make = $make;
        return $this;
    }

    /**
     * Get Mileage
     *
     * @return int
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * Set Mileage
     *
     * @param int $mileage
     *
     * @return $this
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
        return $this;
    }

    /**
     * Get Model
     *
     * @return int
     */
    public function getModel()
    {
        if (empty($this->model)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'model')
            );
        }
        return $this->model;
    }

    /**
     * Set Model
     *
     * @param int $model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Get Transmission
     *
     * @return int
     */
    public function getTransmission()
    {
        if (empty($this->transmission)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'transmission')
            );
        }
        return $this->transmission;
    }

    /**
     * Set Transmission
     *
     * @param int $transmission
     *
     * @return $this
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
        return $this;
    }

    /**
     * Get Year
     *
     * @return int
     */
    public function getYear()
    {
        if (empty($this->year)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'year')
            );
        }
        return $this->year;
    }

    /**
     * Set Year
     *
     * @param int $year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }
}
