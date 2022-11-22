<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ConsolidateFulfillmentsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType
     */
    protected $fulfillments;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType  $fulfillments
     */
    public function __construct(FulfillmentIdentifierListType $fulfillments)
    {
        $this->fulfillments = $fulfillments;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType  $fulfillments
     */
    public static function create(FulfillmentIdentifierListType $fulfillments)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType
     */
    public function getFulfillments()
    {
        return $this->fulfillments;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType  $fulfillments
     * @return $this
     */
    public function setFulfillments($fulfillments)
    {
        $this->fulfillments = $fulfillments;

        return $this;
    }
}
