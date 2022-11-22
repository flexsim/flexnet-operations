<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMatchingLineItemsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType
     */
    protected $lineItemList;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType  $lineItemList
     */
    public function __construct(GetMatchingLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType  $lineItemList
     */
    public static function create(GetMatchingLineItemsListType $lineItemList)
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
     * @param  \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsListType  $lineItemList
     * @return $this
     */
    public function setLineItemList($lineItemList)
    {
        $this->lineItemList = $lineItemList;

        return $this;
    }
}
