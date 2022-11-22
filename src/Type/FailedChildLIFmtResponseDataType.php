<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedChildLIFmtResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedChildLIFulfillmentDataType
     */
    protected $failedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedChildLIFulfillmentDataType  $failedFulfillment
     */
    public function __construct(FailedChildLIFulfillmentDataType $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedChildLIFulfillmentDataType  $failedFulfillment
     */
    public static function create(FailedChildLIFulfillmentDataType $failedFulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedChildLIFulfillmentDataType
     */
    public function getFailedFulfillment()
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedChildLIFulfillmentDataType  $failedFulfillment
     * @return $this
     */
    public function setFailedFulfillment($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;

        return $this;
    }
}
