<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RehostFulfillmentRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RehostFulfillmentDataType
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\RehostFulfillmentDataType $fulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RehostFulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\RehostFulfillmentDataType $fulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RehostFulfillmentDataType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RehostFulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RehostFulfillmentDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }


}

