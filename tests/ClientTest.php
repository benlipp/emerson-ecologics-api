<?php

use EmersonApi\Client;
use EmersonApi\Credentials;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    protected $credentials;
    protected $httpClient;

    public function setUp()
    {
        parent::setUp();
        $this->credentials = new Credentials('testUser', 'testPassword', '{baa5c007-0cdc-4440-8299-ac4ab8d3e471}');
        $this->httpClient = new GuzzleHttp\Client();
    }

    public function testClientSyntax()
    {
        $client = new Client($this->credentials);
        $this->assertTrue(is_object($client));
    }

}