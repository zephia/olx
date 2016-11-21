<?php

namespace Zephia\OLXFeed\Tests\Entity;

use Zephia\OLXFeed\Entity\AdBag;

class AdBagTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorOk()
    {
        $adBag = new AdBag();
        $this->assertInstanceOf(AdBag::class, $adBag);
    }
}
