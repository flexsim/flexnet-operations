<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingLineItemsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType
     */
    private $lineItemInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType
     */
    public function getLineItemInfo()
    {
        return $this->lineItemInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo
     * @return $this
     */
    public function setLineItemInfo($lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
        return $this;
    }


}

