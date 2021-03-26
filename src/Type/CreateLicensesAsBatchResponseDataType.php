<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateLicensesAsBatchResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentDataType
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment)
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
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment
     * @return $this
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }


}

