<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransferLineItemsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferLineItemsListType
     */
    protected $lineItemList;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferLineItemsListType $lineItemList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferLineItemsListType $lineItemList)
    {
        $this->lineItemList = $lineItemList;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferLineItemsListType $lineItemList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferLineItemsListType $lineItemList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferLineItemsListType
     */
    public function getLineItemList()
    {
        return $this->lineItemList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferLineItemsListType $lineItemList
     * @return $this
     */
    public function setLineItemList($lineItemList)
    {
        $this->lineItemList = $lineItemList;

        return $this;
    }
}
