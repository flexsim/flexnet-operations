<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFulfillmentDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateFulfillmentDataType
     */
    protected $fulfillment;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateFulfillmentDataType $fulfillment, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateFulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateFulfillmentDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
