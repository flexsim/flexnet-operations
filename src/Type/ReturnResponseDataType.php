<?php

namespace Flexsim\FlexnetOperations\Type;

class ReturnResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ReturnFulfillmentResponseDataType
     */
    protected $fulfillmentData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ReturnFulfillmentResponseDataType|array $fulfillmentData
     */
    public function __construct($fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ReturnFulfillmentResponseDataType|array $fulfillmentData
     */
    public static function create($fulfillmentData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ReturnFulfillmentResponseDataType
     */
    public function getFulfillmentData()
    {
        return $this->fulfillmentData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ReturnFulfillmentResponseDataType $fulfillmentData
     * @return $this
     */
    public function setFulfillmentData($fulfillmentData)
    {
        $this->fulfillmentData = $fulfillmentData;

        return $this;
    }
}
