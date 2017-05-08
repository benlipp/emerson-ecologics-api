<?php


namespace EmersonApi\Api\OrderService\Models;


class OrderApiAddress extends BaseModel
{

    /**
     * @var string
     */
    protected $fullName;

    /**
     * @var string
     */
    protected $line1;

    /**
     * @var string
     */
    protected $line2;

    /**
     * @var string
     */
    protected $city;

    /**
     * State Abbreviation.
     * @var string
     */
    protected $regionCode;

    /**
     * @var string
     */
    protected $countryCode = 'US';

    /**
     * @var string
     */
    protected $phoneNumber;
}