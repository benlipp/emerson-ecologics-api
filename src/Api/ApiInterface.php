<?php

namespace EmersonApi\Api;

/**
 * Interface ApiInterface
 * @package EmersonApi\Api
 */
interface ApiInterface
{

    /**
     * @param       $path
     * @param array $parameters
     * @param array $headers
     * @return mixed
     */
    public function get($path, array $parameters = [], $headers = []);

    /**
     * @param       $path
     * @param null  $postBody
     * @param array $parameters
     * @param array $headers
     * @return mixed
     */
    public function post($path, $postBody = null, array $parameters = [], $headers = []);

}