<?php

namespace EmersonApi\Api\OrderService\Models;

class LineItem extends BaseModel
{

    /**
     * @var string
     */
    public $ItemId;

    /**
     * @var int
     */
    public $Quantity;

    /**
     * Optional?
     * @var string
     */
    public $DisplayName;
}