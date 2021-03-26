<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PublisherErrorFulfillmentRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentDataType
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentDataType $fulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentDataType $fulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentDataType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }


}

