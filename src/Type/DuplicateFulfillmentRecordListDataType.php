<?php

namespace Flexsim\FlexnetOperations\Type;

class DuplicateFulfillmentRecordListDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $fulfillment
     */
    public function __construct(FulfillmentIdentifierType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $fulfillment
     */
    public static function create(FulfillmentIdentifierType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }
}
