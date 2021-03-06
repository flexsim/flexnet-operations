<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LinkAddonLineItemsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkAddonLineItemDataType
     */
    protected $requestList;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkAddonLineItemDataType $requestList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemDataType $requestList)
    {
        $this->requestList = $requestList;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkAddonLineItemDataType $requestList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemDataType $requestList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkAddonLineItemDataType
     */
    public function getRequestList()
    {
        return $this->requestList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkAddonLineItemDataType $requestList
     * @return $this
     */
    public function setRequestList($requestList)
    {
        $this->requestList = $requestList;

        return $this;
    }
}
