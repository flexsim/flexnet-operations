<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMatchingLineItemsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType $failedLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType $failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType $failedLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType $failedLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType
     */
    public function getFailedLineItem()
    {
        return $this->failedLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType $failedLineItem
     * @return $this
     */
    public function setFailedLineItem($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
        return $this;
    }


}

