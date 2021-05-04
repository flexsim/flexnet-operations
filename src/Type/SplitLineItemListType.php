<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType|array 
     */
    private $lineItemInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType|array $lineItemInfo
     */
    public function __construct($lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType|array $lineItemInfo
     */
    public static function create($lineItemInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType|array 
     */
    public function getLineItemInfo()
    {
        return $this->lineItemInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType|array $lineItemInfo
     * @return $this
     */
    public function setLineItemInfo($lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
        return $this;
    }
}
