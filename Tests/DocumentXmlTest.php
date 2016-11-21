<?php

namespace Zephia\OLXFeed\Tests;

use JMS\Serializer\SerializerBuilder;
use Zephia\OLXFeed\Document;
use Zephia\OLXFeed\Entity\AdBag;

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

    public function testBasicXml()
    {
        $adBag = new AdBag;
        $xml_string = $this->document->generate($adBag);
        $xml_object = simplexml_load_string($xml_string);

        $xml_string_for_comparision = $this->getXml('basic.xml');
        $xml_object_for_comparision = simplexml_load_string($xml_string_for_comparision);

        $this->assertEquals($xml_string, $xml_string_for_comparision);
        $this->assertEquals($xml_object, $xml_object_for_comparision);
    }

    private function getXml($file_name)
    {
        return file_get_contents(__DIR__ . '/xml_samples/' . $file_name);
    }
}
