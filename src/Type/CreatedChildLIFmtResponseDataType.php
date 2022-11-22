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
     * @param  \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType  $fulfillment
     */
    public function __construct(CreatedChildLIFulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType  $fulfillment
     */
    public static function create(CreatedChildLIFulfillmentDataType $fulfillment)
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
     * @param  \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentDataType  $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }
}
