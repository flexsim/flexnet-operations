<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingLineItemsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType|array 
     */
    protected $lineItemInfo;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType|array $lineItemInfo
     */
    public function __construct($lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType|array $lineItemInfo
     */
    public static function create($lineItemInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType|array 
     */
    public function getLineItemInfo()
    {
        return $this->lineItemInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType|array $lineItemInfo
     * @return $this
     */
    public function setLineItemInfo($lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
        return $this;
    }
}
