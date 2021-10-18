<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMatchingLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType
     */
    protected $lineItemInfo;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetMatchingLineItemInfoType $lineItemInfo, string $reason)
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
