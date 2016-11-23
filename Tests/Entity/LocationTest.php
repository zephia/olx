<?php

namespace Zephia\OLXFeed\Tests\Entity;

use Zephia\OLXFeed\Entity\Location;
use Zephia\OLXFeed\Exception\LogicException;

class LocationTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Location::class, (new Location));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Location)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $location = new Location;
        $this->assertEquals($location, $location->setCity('test_city'));
        $this->assertEquals('test_city', $location->getCity());
        $this->assertEquals($location, $location->setCountry('test_country'));
        $this->assertEquals('test_country', $location->getCountry());
        $this->assertEquals($location, $location->setState('test_state'));
        $this->assertEquals('test_state', $location->getState());
        $this->assertEquals($location, $location->setNeighborhood('test_neighborhood'));
        $this->assertEquals('test_neighborhood', $location->getNeighborhood());
        $this->assertEquals($location, $location->setLatitude(1.0));
        $this->assertEquals(1.0, $location->getLatitude());
        $this->assertEquals($location, $location->setLongitude(1.0));
        $this->assertEquals(1.0, $location->getLongitude());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['City', 'city'],
            ['Country', 'country'],
            ['State', 'state'],
        ];
    }
}
