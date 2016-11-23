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
 * Class Image
 *
 * @package Zephia\OLXFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Image extends Entity
{
    /**
     * @var string
     */
    private $url = '';

    /**
     * Get URL
     *
     * @return string
     */
    public function getUrl()
    {
        if (empty($this->url)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'url')
            );
        }
        return $this->url;
    }

    /**
     * Set URL
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
