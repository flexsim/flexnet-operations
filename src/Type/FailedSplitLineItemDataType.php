<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSplitLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType
     */
    private $lineItemInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SplitLineItemInfoType $lineItemInfo, string $reason)
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}
