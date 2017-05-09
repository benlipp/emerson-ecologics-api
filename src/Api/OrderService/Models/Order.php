<?php

namespace EmersonApi\Api\OrderService\Models;

class Order extends BaseModel
{

    /**
     * @var LineItem[]
     */
    protected $LineItems;

    ///**
    // * Optional.
    // *
    // * @var int
    // */
    ////protected $ShipToAddressKey;

    /**
     * @var Address
     */
    protected $ShipToAddress;

    /**
     * @var string
     */
    protected $PaymentIdentifier = "Terms";

    /**
     * @var string[]
     */
    protected $OrderComments;

    /**
     * Order constructor.
     * @param LineItem[] | null $LineItems
     * @param Address | null    $ShipToAddress
     * @param string[] | null   $OrderComments
     */
    public function __construct($LineItems = null, $ShipToAddress = null, $OrderComments = null)
    {
        parent::__construct();
        $this->LineItems = $LineItems;
        $this->ShipToAddress = $ShipToAddress;
        $this->OrderComments = $OrderComments;
    }

    /**
     * Add a line item to the order.
     * @param LineItem $lineItem
     */
    public function addLineItem(LineItem $lineItem)
    {
        $this->LineItems[] = $lineItem;
    }

    public function addComment($comment)
    {
        $this->OrderComments[] = $comment;
    }

    /**
     * Set the ship-to address.
     * @param $shipToAddress Address
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->ShipToAddress = $shipToAddress;
    }


}