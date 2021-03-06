<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedOnholdFulfillmentListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType|array
     */
    protected $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType|array $failedFulfillment
     */
    public function __construct($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType|array $failedFulfillment
     */
    public static function create($failedFulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType|array
     */
    public function getFailedFulfillment()
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedOnholdFulfillmentDataType|array $failedFulfillment
     * @return $this
     */
    public function setFailedFulfillment($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;

        return $this;
    }
}
