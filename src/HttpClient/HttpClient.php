<?php


namespace EmersonApi\HttpClient;


use EmersonApi\HttpClient\Adapter\AdapterInterface;

class HttpClient
{

    /**
     * @var AdapterInterface
     */
    private $adapter;

    /**
     * @var array
     */
    protected $options;

}