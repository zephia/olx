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
 * Class Contact
 *
 * @package Zephia\OLXFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Contact extends Entity
{
    /**
     * @var string
     */
    private $email = '';

    /**
     * @var int
     */
    private $phone = 0;

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        if (empty($this->email)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'email')
            );
        }
        return $this->email;
    }

    /**
     * Set Email
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get Phone
     *
     * @return int
     */
    public function getPhone()
    {
        if (empty($this->phone)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'phone')
            );
        }
        return $this->phone;
    }

    /**
     * Set Phone
     *
     * @param int $phone
     *
     * @return $this
     */
    public function setPhone(int $phone)
    {
        $this->phone = $phone;
        return $this;
    }
}
