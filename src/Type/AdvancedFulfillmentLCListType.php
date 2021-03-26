<?php

namespace Flexsim\FlexnetOperations\Type;

class AdvancedFulfillmentLCListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType $fulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType $fulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }


}

