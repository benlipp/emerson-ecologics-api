<?php

namespace EmersonApi;

use GuzzleHttp\Client as Guzzle;

class Client
{

    protected $httpClient;
    protected $credentials;
    protected $options;

    /**
     * Client constructor.
     *
     * @param \GuzzleHttp\Client $httpClient
     * @param \EmersonApi\Credentials                             $credentials
     * @param array                                               $options
     */
    public function __construct(Guzzle $httpClient, Credentials $credentials, $options = [])
    {
        $this->httpClient = $httpClient;
        $this->credentials = $credentials;
        $this->options = $options;
    }

}