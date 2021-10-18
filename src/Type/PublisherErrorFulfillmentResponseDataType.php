<?php

namespace Flexsim\FlexnetOperations\Type;

class PublisherErrorFulfillmentResponseDataType extends FlexnetType
{

    /**
     * @var int
     */
    protected $recordRefNo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentDataType
     */
    protected $fulfillment;

    /**
     * Constructor
     *
     * @var int $recordRefNo
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment
     */
    public function __construct(int $recordRefNo, \Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment = null)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillment = $fulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var int $recordRefNo
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment
     */
    public static function create(int $recordRefNo, \Flexsim\FlexnetOperations\Type\FulfillmentDataType $fulfillment = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getRecordRefNo()
    {
        return $this->recordRefNo;
    }

    /**
     * @param int $recordRefNo
     * @return $this
     */
    public function setRecordRefNo($recordRefNo)
    {
        $this->recordRefNo = $recordRefNo;
        return $this;
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
