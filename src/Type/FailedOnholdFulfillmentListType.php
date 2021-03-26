<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedOnholdFulfillmentListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType $failedFulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType $failedFulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType $failedFulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType
     */
    public function getFailedFulfillment()
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType $failedFulfillment
     * @return $this
     */
    public function setFailedFulfillment($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
        return $this;
    }


}

