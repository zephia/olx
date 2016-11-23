<?php

namespace Zephia\OLXFeed\Tests;

use JMS\Serializer\SerializerBuilder;
use Zephia\OLXFeed\Document;
use Zephia\OLXFeed\Entity\AdBag;
use Zephia\OLXFeed\Entity\Contact;
use Zephia\OLXFeed\Entity\Image;
use Zephia\OLXFeed\Entity\Location;
use Zephia\OLXFeed\Entity\Vehicle;

class DocumentXmlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Document
     */
    private $document;

    public function setUp()
    {
        $serializer = SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../resources/config/serializer')
            ->build();
        $this->document = new Document($serializer);
    }

    public function test_basic_xml()
    {
        $xml_string = $this->document->generate((new AdBag));
        $xml_object = simplexml_load_string($xml_string);

        $xml_string_for_comparision = $this->getXml('basic.xml');
        $xml_object_for_comparision = simplexml_load_string($xml_string_for_comparision);

        $this->assertEquals($xml_string, $xml_string_for_comparision);
        $this->assertEquals($xml_object, $xml_object_for_comparision);
    }

    public function test_vehicle_xml()
    {
        $xml_string = $this->document->generate(
            (new AdBag)->addAd(
                (new Vehicle)->setId('001')
                    ->setTitle('2009 Ford Escort – Excelente estado – 150,000 Km')
                    ->setDescription('Vendo Ford Escort')
                    ->setCategory(378)
                    ->setCondition(2)
                    ->setContact(
                        (new Contact)
                            ->setEmail('vendo@gmail.com')
                            ->setPhone(1145671234)
                    )
                    ->setFuel(2)
                    ->addImage(
                        (new Image)
                            ->setUrl('http://www.yourdomain.com/image-1.png')
                    )
                    ->addImage(
                        (new Image)
                            ->setUrl('http://www.yourdomain.com/image-2.png')
                    )
                    ->addImage(
                        (new Image)
                            ->setUrl('http://www.yourdomain.com/image-3.png')
                    )
                    ->addImage(
                        (new Image)
                            ->setUrl('http://www.yourdomain.com/image-n.png')
                    )
                    ->setLocation(
                        (new Location)
                            ->setCountry('www.olx.com.ar')
                            ->setState('capitalfederal-gba.olx.com.ar')
                            ->setCity('capitalfederal.olx.com.ar')
                            ->setNeighborhood(51892)
                            ->setLatitude(-34.77812)
                            ->setLongitude(-45.23890)
                    )
                    ->setMake(25)
                    ->setMileage(150000)
                    ->setModel(178)
                    ->setPrice(100000)
                    ->setPriceCurrency(26)
                    ->setTransmission(1)
                    ->setYear(2009)
            )
        );

        $xml_string_for_comparision = $this->getXml('vehicle.xml');

        $this->assertEquals($xml_string, $xml_string_for_comparision);
    }

    private function getXml($file_name)
    {
        return file_get_contents(__DIR__ . '/xml_samples/' . $file_name);
    }
}
