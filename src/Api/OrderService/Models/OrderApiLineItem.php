<?php

namespace EmersonApi\Api\OrderService\Models;

class OrderApiLineItem extends BaseModel
{

    /**
     * @var string
     */
    protected $itemId;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * Optional?
     * @var string
     */
    protected $displayName;
}