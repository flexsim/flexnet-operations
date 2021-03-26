<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StopGapFulfillmentRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StopGapFulfillmentDataType
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StopGapFulfillmentDataType $fulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StopGapFulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StopGapFulfillmentDataType $fulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StopGapFulfillmentDataType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StopGapFulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StopGapFulfillmentDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }


}

