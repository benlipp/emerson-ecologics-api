<?php

namespace EmersonApi\Api\OrderService\Requests;

use EmersonApi\Api\OrderService\Models\OrderApiLineItem;

class OrderApiRequest
{

    /**
     * @var OrderApiLineItem[]
     */
    protected $lineItems;

    /**
     * Optional.
     *
     * @var int
     */
    protected $shipToAddressKey;


    protected $orderApiAddress;

}