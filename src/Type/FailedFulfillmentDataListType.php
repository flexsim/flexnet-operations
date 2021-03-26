<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFulfillmentDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedFulfillmentDataType
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedFulfillmentDataType|array $failedFulfillment
     */
    public function __construct($failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedFulfillmentDataType|array $failedFulfillment
     */
    public static function create($failedFulfillment = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedFulfillmentDataType
     */
    public function getFailedFulfillment()
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedFulfillmentDataType $failedFulfillment
     * @return $this
     */
    public function setFailedFulfillment($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
        return $this;
    }


}
