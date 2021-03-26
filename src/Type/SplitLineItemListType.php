<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType
     */
    private $lineItemInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType
     */
    public function getLineItemInfo()
    {
        return $this->lineItemInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo
     * @return $this
     */
    public function setLineItemInfo($lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
        return $this;
    }


}

