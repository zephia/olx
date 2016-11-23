<?php

namespace Zephia\OLXFeed\Tests\Entity;

use Zephia\OLXFeed\Entity\Image;
use Zephia\OLXFeed\Exception\LogicException;

class ImageTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Image::class, (new Image));
    }

    public function test_empty_required_getters()
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: url');
        (new Image)->getUrl();
    }

    public function test_getters_and_setters_ok()
    {
        $image = new Image;
        $this->assertEquals($image, $image->setUrl('test_url'));
        $this->assertEquals('test_url', $image->getUrl());
    }
}
