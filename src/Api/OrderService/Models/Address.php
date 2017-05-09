<?php


namespace EmersonApi\Api\OrderService\Models;


class Address extends BaseModel
{

    /**
     * @var string
     */
    public $FullName;

    /**
     * @var string
     */
    public $Line1;

    /**
     * @var string
     */
    public $Line2;

    /**
     * @var string
     */
    public $City;

    /**
     * State Abbreviation.
     * @var string
     */
    public $RegionCode;

    /**
     * @var string
     */
    public $PostalCode;

    /**
     * @var string
     */
    public $CountryCode = 'US';

    /**
     * @var string
     */
    public $PhoneNumber;
}