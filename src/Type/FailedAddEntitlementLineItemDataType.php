<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAddEntitlementLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType
     */
    protected $lineItem;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem = null, string $reason = null)
    {
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddEntitlementLineItemDataType $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;
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
