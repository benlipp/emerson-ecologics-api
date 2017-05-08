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
        foreach ($details as $key => $value) {
            if (property_exists($this, $key))
            {
                $this->$key = $value;
            }
        }
    }

    public function __toString()
    {
        $data = get_object_vars($this);

        $formattedData = [];
        foreach ($data as $key => $value){
            $formattedData[ucfirst($key)] = $value;
        }

        return json_encode($formattedData);
    }
}