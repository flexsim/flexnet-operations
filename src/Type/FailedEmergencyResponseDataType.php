<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedEmergencyResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType
     */
    protected $fulfillment;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public function __construct(EmergencyFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType  $fulfillment
     * @param  string  $reason
     */
    public static function create(EmergencyFulfillmentDataType $fulfillment, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType  $fulfillment
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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
