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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType  $lineItemInfo
     * @param  string  $reason
     */
    public function __construct(GetMatchingLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType  $lineItemInfo
     * @param  string  $reason
     */
    public static function create(GetMatchingLineItemInfoType $lineItemInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType
     */
    public function getLineItemInfo(): GetMatchingLineItemInfoType
    {
        return $this->lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemInfoType  $lineItemInfo
     * @return FailedMatchingLineItemDataType
     */
    public function withLineItemInfo(GetMatchingLineItemInfoType $lineItemInfo): FailedMatchingLineItemDataType
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
     * @return FailedMatchingLineItemDataType
     */
    public function withReason(string $reason): FailedMatchingLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
