<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSplitLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType $failedLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType $failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType $failedLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType $failedLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType
     */
    public function getFailedLineItem()
    {
        return $this->failedLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType $failedLineItem
     * @return $this
     */
    public function setFailedLineItem($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
        return $this;
    }


}

