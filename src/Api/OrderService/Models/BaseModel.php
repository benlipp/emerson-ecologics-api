<?php


namespace EmersonApi\Api\OrderService\Models;


class BaseModel
{

    /**
     * BaseModel constructor.
     * @param array|null $details
     */
    public function __construct($details = null)
    {
        if ($details) {
            foreach ($details as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    public function toJson()
    {
        return json_encode(get_object_vars($this));
    }
}