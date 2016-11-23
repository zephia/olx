<?php

namespace Zephia\OLXFeed\Tests\Entity;

use Zephia\OLXFeed\Entity\Ad;
use Zephia\OLXFeed\Exception\LogicException;

class AdTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Ad::class, (new Ad));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Ad)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $ad = new Ad;
        $this->assertEquals($ad, $ad->setId('test_id'));
        $this->assertEquals('test_id', $ad->getId());
        $this->assertEquals($ad, $ad->setCategory('test_category'));
        $this->assertEquals('test_category', $ad->getCategory());
        $this->assertEquals($ad, $ad->setDescription('test_description'));
        $this->assertEquals('test_description', $ad->getDescription());
        $this->assertEquals($ad, $ad->setPrice(1));
        $this->assertEquals(1, $ad->getPrice());
        $this->assertEquals($ad, $ad->setPriceCurrency(1));
        $this->assertEquals(1, $ad->getPriceCurrency());
        $this->assertEquals($ad, $ad->setTitle('test_title'));
        $this->assertEquals('test_title', $ad->getTitle());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Id', 'id'],
            ['Category', 'category'],
            ['Description', 'description'],
            ['Images', 'images'],
            ['Price', 'price'],
            ['PriceCurrency', 'price_currency'],
            ['Title', 'title'],
        ];
    }
}
