<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedMatchingLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType
     */
    private $lineItemInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType $lineItemInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemInfo(): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType
    {
        return $this->lineItemInfo;
    }

    public function withLineItemInfo(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType $lineItemInfo): \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
