<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitLineItemResponseListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemDataType|array 
     */
    private $splitLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemDataType|array $splitLineItem
     */
    public function __construct($splitLineItem)
    {
        $this->splitLineItem = $splitLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemDataType|array $splitLineItem
     */
    public static function create($splitLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitLineItemDataType|array 
     */
    public function getSplitLineItem()
    {
        return $this->splitLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitLineItemDataType|array $splitLineItem
     * @return $this
     */
    public function setSplitLineItem($splitLineItem)
    {
        $this->splitLineItem = $splitLineItem;
        return $this;
    }
}
