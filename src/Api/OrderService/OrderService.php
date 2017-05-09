<?php

namespace EmersonApi\Api\OrderService;

use EmersonApi\Api\OrderService\Models\Order;
use EmersonApi\Client;

class OrderService
{

    /**
     * OrderService constructor.
     * @param Client $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Check if service is alive.
     * @return bool
     */
    public function isAlive()
    {
        $response = $this->client->getHttpClient()->get('isAlive');
        $status = (string)$response->getBody();

        return $status === "true";
    }

    /**
     * @param \EmersonApi\Api\OrderService\Models\Order $order
     * @return string
     */
    public function submitOrder(Order $order)
    {
        $response = $this->client->getHttpClient()->post('submitOrder', [
            'json' => [
                'Order' => $order->toJson(),
                'apiRequestType' => 1
            ]
        ]);
        return (string)$response->getBody();
    }

}