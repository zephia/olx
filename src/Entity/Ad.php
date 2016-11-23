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
 * Class Ad
 *
 * @package Zephia\OLXFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Ad extends Entity
{
    /**
     * @var string
     */
    private $id = '';

    /**
     * @var string
     */
    private $category = '';

    /**
     * @var Contact
     */
    private $contact;

    /**
     * @var string
     */
    private $description = '';

    /**
     * @var array
     */
    private $images = [];

    /**
     * @var Location
     */
    private $location;

    /**
     * @var int
     */
    private $price = 0;

    /**
     * @var int
     */
    private $price_currency = 0;

    /**
     * @var string
     */
    private $title = '';

    /**
     * Get Id
     *
     * @return string
     */
    public function getId()
    {
        if (empty($this->id)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'id')
            );
        }
        return $this->id;
    }

    /**
     * Set Id
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get Category
     *
     * @return string
     */
    public function getCategory()
    {
        if (empty($this->category)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'category')
            );
        }
        return $this->category;
    }

    /**
     * Set Category
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get Contact
     *
     * @return Contact
     */
    public function getContact()
    {
        if (empty($this->contact)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'contact')
            );
        }
        return $this->contact;
    }

    /**
     * Set Contact
     *
     * @param Contact $contact
     *
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get Description
     *
     * @return string
     */
    public function getDescription()
    {
        if (empty($this->description)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'description')
            );
        }
        return $this->description;
    }

    /**
     * Set Description
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get Image
     *
     * @return array
     */
    public function getImages()
    {
        if (count($this->images) === 0) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'images')
            );
        }
        return $this->images;
    }

    /**
     * Set Images
     *
     * @param array $images
     *
     * @return $this
     */
    public function setImages(array $images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Add an image
     *
     * @param Image $image
     *
     * @return $this
     */
    public function addImage(Image $image)
    {
        $this->images[] = $image;
        return $this;
    }

    /**
     * Get Location
     *
     * @return Location
     */
    public function getLocation()
    {
        if (empty($this->location)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'location')
            );
        }
        return $this->location;
    }

    /**
     * Set Location
     *
     * @param Location $location
     *
     * @return $this
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Get Price
     *
     * @return int
     */
    public function getPrice()
    {
        if (empty($this->price)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'price')
            );
        }
        return $this->price;
    }

    /**
     * Set Price
     *
     * @param int $price
     *
     * @return $this
     */
    public function setPrice(int $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get Price Currency
     *
     * @return int
     */
    public function getPriceCurrency()
    {
        if (empty($this->price_currency)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'price_currency')
            );
        }
        return $this->price_currency;
    }

    /**
     * Set Price Currency
     *
     * @param int $price_currency
     *
     * @return $this
     */
    public function setPriceCurrency(int $price_currency)
    {
        $this->price_currency = $price_currency;
        return $this;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle()
    {
        if (empty($this->title)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'title')
            );
        }
        return $this->title;
    }

    /**
     * Set Title
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }
}
