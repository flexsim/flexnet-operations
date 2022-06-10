<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRepairResponselistDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRepairResponseDataType
     */
    protected $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedRepairResponseDataType|array $failedFulfillment
     */
    public function __construct($failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedRepairResponseDataType|array $failedFulfillment
     */
    public static function create($failedFulfillment = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRepairResponseDataType
     */
    public function getFailedFulfillment()
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedRepairResponseDataType $failedFulfillment
     * @return $this
     */
    public function setFailedFulfillment($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;

        return $this;
    }
}
