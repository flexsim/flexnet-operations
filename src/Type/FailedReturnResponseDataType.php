<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedReturnResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ReturnFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnFulfillmentDataType $fulfillment
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ReturnFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnFulfillmentDataType $fulfillment
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ReturnFulfillmentDataType $fulfillment, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ReturnFulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ReturnFulfillmentDataType $fulfillment
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
