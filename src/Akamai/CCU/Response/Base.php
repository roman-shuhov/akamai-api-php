<?php

namespace Akamai\CCU\Response;

class Base
{
    /**
     * @var string
     */
    const SUCCESS_CODE = 200;

    /**
     * @var string
     */
    const UNAUTHORIZED_CODE = 403;

    /**
     * @var int
     */
    public $httpStatus;

    /**
     * @var array
     */
    public $unknownFields = array();


    /**
     * Process raw response
     * and fill object fields with response values
     *
     * @param \stdClass $rawResponse
     */
    public function __construct($rawResponse)
    {
        if (is_string($rawResponse)) {
            $rawResponse = json_decode($rawResponse);
        }

        if (empty($rawResponse)) {
            return;
        }

        foreach ($rawResponse as $fieldName => $fieldValue) {
            if (property_exists($this, $fieldName)) {
                $this->{$fieldName} = $fieldValue;
            } else {
                $this->unknownFields[$fieldName] = $fieldValue;
            }
        }
    }

    /**
     * Check if request was successful
     *
     * @return bool
     */
    public function isSuccess()
    {
        return static::SUCCESS_CODE == $this->httpStatus;
    }
}