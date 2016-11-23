<?php

namespace Zephia\OLXFeed\Tests\Entity;

use Zephia\OLXFeed\Entity\Contact;
use Zephia\OLXFeed\Exception\LogicException;

class ContactTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Contact::class, (new Contact));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Contact)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $contact = new Contact;
        $this->assertEquals($contact, $contact->setEmail('test_email'));
        $this->assertEquals('test_email', $contact->getEmail());
        $this->assertEquals($contact, $contact->setPhone(12345678));
        $this->assertEquals(12345678, $contact->getPhone());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Email', 'email'],
            ['Phone', 'phone'],
        ];
    }
}
