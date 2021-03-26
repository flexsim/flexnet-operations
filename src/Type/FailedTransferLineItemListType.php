<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedTransferLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferLineItemDataType
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferLineItemDataType $failedLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedTransferLineItemDataType $failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferLineItemDataType $failedLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedTransferLineItemDataType $failedLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedTransferLineItemDataType
     */
    public function getFailedLineItem()
    {
        return $this->failedLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedTransferLineItemDataType $failedLineItem
     * @return $this
     */
    public function setFailedLineItem($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
        return $this;
    }


}

