<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferredLineItemsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType
     */
    private $transferredLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType $transferredLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferredLineItemDataType $transferredLineItem)
    {
        $this->transferredLineItem = $transferredLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType $transferredLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferredLineItemDataType $transferredLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType
     */
    public function getTransferredLineItem()
    {
        return $this->transferredLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType $transferredLineItem
     * @return $this
     */
    public function setTransferredLineItem($transferredLineItem)
    {
        $this->transferredLineItem = $transferredLineItem;
        return $this;
    }


}

