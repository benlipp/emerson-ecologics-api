<?php

namespace EmersonApi;

use GuzzleHttp\ClientInterface;

class Client
{

    /**
     * Client constructor.
     *
     * @param \GuzzleHttp\ClientInterface|null $httpClient
     * @param \EmersonApi\Credentials          $credentials
     * @param array                            $options
     */
    public function __construct(ClientInterface $httpClient = null, Credentials $credentials, $options = [])
    {

    }

}