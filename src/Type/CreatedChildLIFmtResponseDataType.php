<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedChildLIFmtResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType
     */
    protected $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType $fulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType $fulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }
}
