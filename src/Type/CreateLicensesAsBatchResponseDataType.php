<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateLicensesAsBatchResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentDataType
     */
    protected $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentDataType  $fulfillment
     */
    public function __construct(FulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentDataType  $fulfillment
     */
    public static function create(FulfillmentDataType $fulfillment)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentDataType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentDataType  $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }
}
