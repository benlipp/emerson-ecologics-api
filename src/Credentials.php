<?php


namespace EmersonApi;


class Credentials
{

    /**
     * @var string
     */
    protected $userName;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * Credentials constructor.
     *
     * @param $userName
     * @param $password
     * @param $apiKey
     */
    public function __construct($userName, $password, $apiKey)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->apiKey = $apiKey;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}