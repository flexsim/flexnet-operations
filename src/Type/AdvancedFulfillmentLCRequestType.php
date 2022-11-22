<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AdvancedFulfillmentLCRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCListType
     */
    protected $fulfillmentList;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCListType  $fulfillmentList
     */
    public function __construct(AdvancedFulfillmentLCListType $fulfillmentList)
    {
        $this->fulfillmentList = $fulfillmentList;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCListType  $fulfillmentList
     */
    public static function create(AdvancedFulfillmentLCListType $fulfillmentList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCListType
     */
    public function getFulfillmentList()
    {
        return $this->fulfillmentList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCListType  $fulfillmentList
     * @return $this
     */
    public function setFulfillmentList($fulfillmentList)
    {
        $this->fulfillmentList = $fulfillmentList;

        return $this;
    }
}
