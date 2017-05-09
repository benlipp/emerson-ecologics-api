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
     * @param LineItem[] | null $lineItems
     * @param Address | null    $shipToAddress
     * @param string[] | null   $orderComments
     */
    public function __construct($lineItems = null, $shipToAddress = null, $orderComments = null)
    {
        parent::__construct();
        $this->LineItems = $lineItems;
        $this->ShipToAddress = $shipToAddress;
        $this->OrderComments = $orderComments;
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