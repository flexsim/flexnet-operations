<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferLineItemsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferLineItemInfoType
     */
    private $lineItemInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferLineItemInfoType $lineItemInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferLineItemInfoType $lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferLineItemInfoType $lineItemInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferLineItemInfoType $lineItemInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferLineItemInfoType
     */
    public function getLineItemInfo()
    {
        return $this->lineItemInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferLineItemInfoType $lineItemInfo
     * @return $this
     */
    public function setLineItemInfo($lineItemInfo)
    {
        $this->lineItemInfo = $lineItemInfo;
        return $this;
    }


}

