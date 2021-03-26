<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitLineItemResponseListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemDataType
     */
    private $splitLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemDataType $splitLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitLineItemDataType $splitLineItem)
    {
        $this->splitLineItem = $splitLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemDataType $splitLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitLineItemDataType $splitLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitLineItemDataType
     */
    public function getSplitLineItem()
    {
        return $this->splitLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitLineItemDataType $splitLineItem
     * @return $this
     */
    public function setSplitLineItem($splitLineItem)
    {
        $this->splitLineItem = $splitLineItem;
        return $this;
    }


}

