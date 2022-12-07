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
     * @param  string  $reason
     */
    public function __construct(SplitLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemInfoType  $lineItemInfo
     * @param  string  $reason
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
     * @return FailedSplitLineItemDataType
     */
    public function withLineItemInfo(SplitLineItemInfoType $lineItemInfo): FailedSplitLineItemDataType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return FailedSplitLineItemDataType
     */
    public function withReason(string $reason): FailedSplitLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
