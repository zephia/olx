# OLX Feed Generator

## Documentation

Official OLX documentation about the OLX feed, can be found
[here](http://help.olx.com.ar/hc/es-419/articles/210169153--Qu%C3%A9-campos-se-necesitan-Gere)

## Installation

Using [composer](http://getcomposer.org)

```bash
$ composer require zephia/olx
```

## Usage

```php
<?php

// Instantiate serializer with configurations.
$serializer = \JMS\Serializer\SerializerBuilder::create()
   ->addMetadataDir(__DIR__ . '/resources/config/serializer')
   ->build();

// Generate document feed
$document = new Zephia\OLXFeed\Document($serializer);

// Generate Ad list
$adBag = new \Zephia\OLXFeed\Entity\AdBag;

$document->generate($adBag);

// <?xml version="1.0" encoding="UTF-8"?>
// <ads/>
```
