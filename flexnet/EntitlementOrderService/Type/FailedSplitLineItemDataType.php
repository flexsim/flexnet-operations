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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType  $lineItemInfo
     */
    public function __construct(SplitLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType  $lineItemInfo
     */
    public static function create(SplitLineItemInfoType $lineItemInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType
     */
    public function getLineItemInfo(): SplitLineItemInfoType
    {
        return $this->lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType  $lineItemInfo
     */
    public function withLineItemInfo(SplitLineItemInfoType $lineItemInfo): FailedSplitLineItemDataType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedSplitLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
