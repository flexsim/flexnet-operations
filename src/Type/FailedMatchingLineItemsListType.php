<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMatchingLineItemsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType|array 
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType|array $failedLineItem
     */
    public function __construct($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType|array $failedLineItem
     */
    public static function create($failedLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType|array 
     */
    public function getFailedLineItem()
    {
        return $this->failedLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingLineItemDataType|array $failedLineItem
     * @return $this
     */
    public function setFailedLineItem($failedLineItem)
    {
        $this->failedLineItem = $failedLineItem;
        return $this;
    }
}
