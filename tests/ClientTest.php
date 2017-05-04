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
        $this->credentials = new Credentials('testUser', 'password', 'apikey');
        $this->httpClient = new GuzzleHttp\Client();
    }

    public function testClientSyntax()
    {
        $client = new Client($this->httpClient, $this->credentials);
        $this->assertTrue(is_object($client));
    }

}