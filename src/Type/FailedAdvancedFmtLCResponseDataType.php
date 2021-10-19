<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAdvancedFmtLCResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCDataType
     */
    protected $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCDataType $failedFulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCDataType $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCDataType $failedFulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCDataType $failedFulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCDataType
     */
    public function getFailedFulfillment()
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedAdvancedFmtLCDataType $failedFulfillment
     * @return $this
     */
    public function setFailedFulfillment($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
        return $this;
    }
}
