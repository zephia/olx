<?php

namespace Zephia\OLXFeed\Tests\Entity;

use Zephia\OLXFeed\Entity\Vehicle;
use Zephia\OLXFeed\Exception\LogicException;

class VehicleTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Vehicle::class, (new Vehicle));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Vehicle)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $ad = new Vehicle;
        $this->assertEquals($ad, $ad->setColor(1));
        $this->assertEquals(1, $ad->getColor());
        $this->assertEquals($ad, $ad->setCondition(1));
        $this->assertEquals(1, $ad->getCondition());
        $this->assertEquals($ad, $ad->setFuel(1));
        $this->assertEquals(1, $ad->getFuel());
        $this->assertEquals($ad, $ad->setMake(1));
        $this->assertEquals(1, $ad->getMake());
        $this->assertEquals($ad, $ad->setMileage(1));
        $this->assertEquals(1, $ad->getMileage());
        $this->assertEquals($ad, $ad->setModel(1));
        $this->assertEquals(1, $ad->getModel());
        $this->assertEquals($ad, $ad->setTransmission(1));
        $this->assertEquals(1, $ad->getTransmission());
        $this->assertEquals($ad, $ad->setYear(2000));
        $this->assertEquals(2000, $ad->getYear());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Id', 'id'],
            ['Category', 'category'],
            ['Condition', 'condition'],
            ['Description', 'description'],
            ['Fuel', 'fuel'],
            ['Images', 'images'],
            ['Make', 'make'],
            ['Model', 'model'],
            ['Price', 'price'],
            ['PriceCurrency', 'price_currency'],
            ['Title', 'title'],
            ['Transmission', 'transmission'],
            ['Year', 'year'],
        ];
    }
}
