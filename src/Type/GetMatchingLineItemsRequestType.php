<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMatchingLineItemsRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType
     */
    private $lineItemList;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType $lineItemList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType $lineItemList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType $lineItemList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType
     */
    public function getLineItemList()
    {
        return $this->lineItemList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType $lineItemList
     * @return $this
     */
    public function setLineItemList($lineItemList)
    {
        $this->lineItemList = $lineItemList;
        return $this;
    }


}

