<?php

use EmersonApi\Api\OrderService\Models\OrderApiAddress;
use PHPUnit\Framework\TestCase;

class OrderApiAddressTest extends TestCase
{

    public function testSyntax()
    {
        $address = new OrderApiAddressTest();
        $this->assertTrue(is_object($address));
    }

    public function testJson()
    {
        $addressData = [
            'fullName' => 'John Smith',
            'line1' => '123 Nowhere St',
            'city' => 'Anywhere',
            'regionCode' => 'OH',
            'postalCode' => '12345',
            'phoneNumber' => '1234567890'
        ];
        $address = new OrderApiAddress($addressData);
        $expectedJson = "{\"FullName\":\"John Smith\",\"Line1\":\"123 Nowhere St\",\"Line2\":null,\"City\":\"Anywhere\",\"RegionCode\":\"OH\",\"CountryCode\":\"US\",\"PhoneNumber\":\"1234567890\"}";
        $actualJson = (string)$address;
        print_r($actualJson);

        $this->assertEquals($expectedJson, $actualJson);
    }

}