<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteOnholdFulfillmentsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdListType
     */
    protected $fulfillmentIdList;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdListType $fulfillmentIdList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentIdListType $fulfillmentIdList)
    {
        $this->fulfillmentIdList = $fulfillmentIdList;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdListType $fulfillmentIdList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentIdListType $fulfillmentIdList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdListType
     */
    public function getFulfillmentIdList()
    {
        return $this->fulfillmentIdList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdListType $fulfillmentIdList
     * @return $this
     */
    public function setFulfillmentIdList($fulfillmentIdList)
    {
        $this->fulfillmentIdList = $fulfillmentIdList;

        return $this;
    }
}
