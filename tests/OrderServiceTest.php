<?php

use EmersonApi\Api\OrderService\Models\Address;
use EmersonApi\Api\OrderService\Models\LineItem;
use EmersonApi\Api\OrderService\Models\Order;
use EmersonApi\Client;
use EmersonApi\Credentials;
use PHPUnit\Framework\TestCase;

class OrderServiceTest extends TestCase
{

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var Client
     */
    private $client;

    public function setUp()
    {
        parent::setUp();
        $this->credentials = new Credentials('testUser', 'testPassword', '{baa5c007-0cdc-4440-8299-ac4ab8d3e471}');
        $this->client = new Client($this->credentials);
    }

    public function testOrderServiceSyntax()
    {
        $this->assertTrue(is_object($this->client->orderService()));
    }


    /**
     * This will fail if the remote server is down, but I don't know of a valid way to test it.
     */
    public function testIsAlive()
    {
        $this->assertTrue($this->client->orderService()->isAlive());
    }

    public function testSubmitOrder()
    {
        $items = [];
        $items[] = new LineItem([
            'ItemId' => 'NANOG',
            'Quantity' => 1
        ]);

        $address = new Address([
            'FullName'    => 'John Smith',
            'Line1'       => '123 Nowhere St',
            'City'        => 'Anywhere',
            'RegionCode'  => 'OH',
            'PostalCode'  => '12345',
            'PhoneNumber' => '1234567890',
        ]);

        $order = new Order($items, $address, ['Test Order, DO NOT FILL']);
        $response = $this->client->orderService()->submitOrder($order);
        print_r($response);
    }
}