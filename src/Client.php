<?php

namespace EmersonApi;

use EmersonApi\Api\OrderService\OrderService;
use GuzzleHttp\Client as GuzzleClient;

class Client
{

    protected $httpClient;
    protected $credentials;

    /**
     * Client constructor.
     *
     * @param \EmersonApi\Credentials $credentials
     */
    public function __construct(Credentials $credentials)
    {
        $this->credentials = $credentials;
        $this->httpClient = new GuzzleClient([
            'base_uri' => 'https://api.emersonecologics.com/4.3/OrderService.svc/json/',
            'query' => $this->credentials->toArray(),
            'timeout' => 2
        ]);
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @return \EmersonApi\Api\OrderService\OrderService
     */
    public function orderService()
    {
        return new OrderService($this);
    }

}