<?php

namespace Flexsim\FlexnetOperations\Type;

class AdvancedFulfillmentLCListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType|array
     */
    protected $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType|array $fulfillment
     */
    public function __construct($fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType|array $fulfillment
     */
    public static function create($fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType|array
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType|array $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }
}
