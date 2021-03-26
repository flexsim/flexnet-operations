<?php

namespace Flexsim\FlexnetOperations\Type;

class RehostResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RehostFulfillmentResponseDataType
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\RehostFulfillmentResponseDataType|array $fulfillmentData
     */
    public function __construct($fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\RehostFulfillmentResponseDataType|array $fulfillmentData
     */
    public static function create($fulfillmentData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RehostFulfillmentResponseDataType
     */
    public function getFulfillmentData()
    {
        return $this->fulfillmentData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RehostFulfillmentResponseDataType $fulfillmentData
     * @return $this
     */
    public function setFulfillmentData($fulfillmentData)
    {
        $this->fulfillmentData = $fulfillmentData;
        return $this;
    }


}

