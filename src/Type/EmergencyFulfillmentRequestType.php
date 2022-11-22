<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmergencyFulfillmentRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType
     */
    protected $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType  $fulfillment
     */
    public function __construct(EmergencyFulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentDataType  $fulfillment
     */
    public static function create(EmergencyFulfillmentDataType $fulfillment)
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
}
