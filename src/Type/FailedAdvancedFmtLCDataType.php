<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAdvancedFmtLCDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType
     */
    protected $fulfillment;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType  $fulfillment
     * @param  string  $reason
     */
    public function __construct(AdvancedFulfillmentLCDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType  $fulfillment
     * @param  string  $reason
     */
    public static function create(AdvancedFulfillmentLCDataType $fulfillment, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCDataType  $fulfillment
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
