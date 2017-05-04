<?php

namespace EmersonApi\Api;

use EmersonApi\Client;

/**
 * Class AbstractApi
 * @package EmersonApi\Api
 */
class AbstractApi implements ApiInterface
{

    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Send a GET request.
     *
     * @param       $path
     * @param array $parameters
     * @param array $headers
     * @return mixed
     */
    public function get($path, array $parameters = [], $headers = [])
    {
        $response = $this->client->getHttpClient()->get($path, $parameters, $headers);

        return $response->json();
    }

    /**
     * Send a POST request.
     *
     * @param       $path
     * @param null  $postBody
     * @param array $parameters
     * @param array $headers
     * @return mixed
     */
    public function post($path, $postBody = null, array $parameters = [], $headers = [])
    {
        $response = $this->client->getHttpClient()->post($path, $postBody, $parameters, $headers);

        return $response->json();
    }


}