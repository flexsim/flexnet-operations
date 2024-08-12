<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedSplitLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
     */
    private $lineItemInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType $lineItemInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemInfo(): \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
    {
        return $this->lineItemInfo;
    }

    public function withLineItemInfo(\Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType $lineItemInfo): \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
