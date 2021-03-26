<?php

namespace Flexsim\FlexnetOperations\Type;

class EmergencyResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentResponseDataType
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentResponseDataType|array $fulfillmentData
     */
    public function __construct($fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentResponseDataType|array $fulfillmentData
     */
    public static function create($fulfillmentData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentResponseDataType
     */
    public function getFulfillmentData()
    {
        return $this->fulfillmentData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentResponseDataType $fulfillmentData
     * @return $this
     */
    public function setFulfillmentData($fulfillmentData)
    {
        $this->fulfillmentData = $fulfillmentData;
        return $this;
    }


}

