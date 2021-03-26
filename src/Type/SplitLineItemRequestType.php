<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SplitLineItemRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemListType
     */
    private $lineItemList;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemListType $lineItemList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitLineItemListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemListType $lineItemList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitLineItemListType $lineItemList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitLineItemListType
     */
    public function getLineItemList()
    {
        return $this->lineItemList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitLineItemListType $lineItemList
     * @return $this
     */
    public function setLineItemList($lineItemList)
    {
        $this->lineItemList = $lineItemList;
        return $this;
    }


}

