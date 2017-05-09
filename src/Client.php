<?php

namespace EmersonApi;

use GuzzleHttp\Client as GuzzleClient;

class Client
{

    protected $httpClient;
    protected $credentials;
    protected $options;

    /**
     * Client constructor.
     *
     * @param \EmersonApi\Credentials                             $credentials
     * @param array                                               $options
     */
    public function __construct(Credentials $credentials, $options = [])
    {
        $this->httpClient = new GuzzleClient([
            'baseUri' => ''
        ]);
        $this->credentials = $credentials;
        $this->options = $options;
    }

}