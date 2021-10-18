<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSplitLineItemListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType|array 
     */
    protected $failedLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType|array $failedLineItem
     */
    public function __construct($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType|array $failedLineItem
     */
    public static function create($failedLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType|array 
     */
    public function getFailedLineItem()
    {
        return $this->failedLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSplitLineItemDataType|array $failedLineItem
     * @return $this
     */
    public function setFailedLineItem($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
        return $this;
    }
}
