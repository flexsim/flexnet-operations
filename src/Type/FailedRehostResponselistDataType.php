<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRehostResponselistDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRehostResponseDataType
     */
    protected $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedRehostResponseDataType|array $failedFulfillment
     */
    public function __construct($failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedRehostResponseDataType|array $failedFulfillment
     */
    public static function create($failedFulfillment = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRehostResponseDataType
     */
    public function getFailedFulfillment()
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedRehostResponseDataType $failedFulfillment
     * @return $this
     */
    public function setFailedFulfillment($failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;

        return $this;
    }
}
