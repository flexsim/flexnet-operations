<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteAddonLineItemsRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemDataType
     */
    private $requestList;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemDataType $requestList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteAddonLineItemDataType $requestList)
    {
        $this->requestList = $requestList;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemDataType $requestList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteAddonLineItemDataType $requestList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemDataType
     */
    public function getRequestList()
    {
        return $this->requestList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemDataType $requestList
     * @return $this
     */
    public function setRequestList($requestList)
    {
        $this->requestList = $requestList;
        return $this;
    }


}

