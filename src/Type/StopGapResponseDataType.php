<?php

namespace Flexsim\FlexnetOperations\Type;

class StopGapResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StopGapFulfillmentResponseDataType
     */
    private $fulfillmentData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StopGapFulfillmentResponseDataType|array $fulfillmentData
     */
    public function __construct($fulfillmentData = null)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StopGapFulfillmentResponseDataType|array $fulfillmentData
     */
    public static function create($fulfillmentData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StopGapFulfillmentResponseDataType
     */
    public function getFulfillmentData()
    {
        return $this->fulfillmentData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StopGapFulfillmentResponseDataType $fulfillmentData
     * @return $this
     */
    public function setFulfillmentData($fulfillmentData)
    {
        $this->fulfillmentData = $fulfillmentData;
        return $this;
    }


}

