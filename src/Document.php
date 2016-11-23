<?php
/*
 * This file is part of the OLX Feed Generator package.
 *
 * (c) Zephia <info@zephia.com.ar>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zephia\OLXFeed;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Zephia\OLXFeed\Entity\AdBag;

/**
 * Class Document
 *
 * @package Zephia\OLXFeed
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Document
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * Document constructor.
     *
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Document generate.
     *
     * @param AdBag $adBag
     *
     * @return string
     */
    public function generate(AdBag $adBag)
    {
        return $this->serializer->serialize($adBag, 'xml');
    }
}
