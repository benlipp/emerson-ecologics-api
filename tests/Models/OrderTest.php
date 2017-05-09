<?php

use EmersonApi\Api\OrderService\Models\Address;
use EmersonApi\Api\OrderService\Models\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    /**
     * @var Address
     */
    public $address;

    /**
     * @var Order
     */
    public $request;

    public function setUp()
    {
        parent::setUp();
        $this->address = new Address([
            'FullName'    => 'John Smith',
            'Line1'       => '123 Nowhere St',
            'City'        => 'Anywhere',
            'RegionCode'  => 'OH',
            'PostalCode'  => '12345',
            'PhoneNumber' => '1234567890',
        ]);

        $this->request = new Order();
    }

    public function testSyntax()
    {
        $this->assertTrue(is_object($this->request));
    }

    public function testAddress()
    {
        $this->request->setShipToAddress($this->address);
        $this->assertJsonStringEqualsJsonFile('tests/TestData/OrderTest.json', $this->request->toJson());
    }
}