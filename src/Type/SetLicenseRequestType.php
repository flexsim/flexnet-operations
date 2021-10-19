<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetLicenseRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OnholdFulfillmentListType
     */
    protected $onholdFulfillmentList;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OnholdFulfillmentListType $onholdFulfillmentList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OnholdFulfillmentListType $onholdFulfillmentList)
    {
        $this->onholdFulfillmentList = $onholdFulfillmentList;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OnholdFulfillmentListType $onholdFulfillmentList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OnholdFulfillmentListType $onholdFulfillmentList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OnholdFulfillmentListType
     */
    public function getOnholdFulfillmentList()
    {
        return $this->onholdFulfillmentList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OnholdFulfillmentListType $onholdFulfillmentList
     * @return $this
     */
    public function setOnholdFulfillmentList($onholdFulfillmentList)
    {
        $this->onholdFulfillmentList = $onholdFulfillmentList;
        return $this;
    }
}
