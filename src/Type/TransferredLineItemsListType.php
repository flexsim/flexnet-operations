<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferredLineItemsListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType|array
     */
    protected $transferredLineItem;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType|array $transferredLineItem
     */
    public function __construct($transferredLineItem)
    {
        $this->transferredLineItem = $transferredLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType|array $transferredLineItem
     */
    public static function create($transferredLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType|array
     */
    public function getTransferredLineItem()
    {
        return $this->transferredLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferredLineItemDataType|array $transferredLineItem
     * @return $this
     */
    public function setTransferredLineItem($transferredLineItem)
    {
        $this->transferredLineItem = $transferredLineItem;

        return $this;
    }
}
