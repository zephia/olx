<?php

namespace Zephia\OLXFeed\Tests;

use JMS\Serializer\SerializerInterface;
use Zephia\OLXFeed\Document;
use Zephia\OLXFeed\Entity\VehicleBag;

class DocumentTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateOk()
    {
        $serializer = $this->mockSerializer();
        $serializer->expects(
            new \PHPUnit_Framework_MockObject_Matcher_InvokedCount(1)
        )->method('serialize')->willReturn('<?xml version "1.0" ?>');
        $response = (new Document($serializer))->generate(new VehicleBag);
        $this->assertEquals('<?xml version "1.0" ?>', $response);
    }

    private function mockSerializer()
    {
        return $this->getMockBuilder(SerializerInterface::class)->getMock();
    }
}
