<?php


namespace EmersonApi;


class Credentials
{

    /**
     * @var string
     */
    protected $username;

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
     * @param $username
     * @param $password
     * @param $apiKey
     */
    public function __construct($username, $password, $apiKey)
    {
        $this->username = $username;
        $this->password = $password;
        $this->apiKey = $apiKey;
    }
}