<?php

use EmersonApi\Api\OrderService\Models\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

    public function testSyntax()
    {
        $address = new AddressTest();
        $this->assertTrue(is_object($address));
    }

    public function testJson()
    {
        $addressData = [
            'FullName'    => 'John Smith',
            'Line1'       => '123 Nowhere St',
            'City'        => 'Anywhere',
            'RegionCode'  => 'OH',
            'PostalCode'  => '12345',
            'PhoneNumber' => '1234567890',
        ];
        $address = new Address($addressData);
        $actualJson = $address->toJson();
        $this->assertJsonStringEqualsJsonFile('tests/TestData/AddressTest.json', $actualJson);
    }

}