<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedTransferLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
     */
    private $lineItemInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType  $lineItemInfo
     */
    public function __construct(TransferLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType  $lineItemInfo
     */
    public static function create(TransferLineItemInfoType $lineItemInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
     */
    public function getLineItemInfo(): TransferLineItemInfoType
    {
        return $this->lineItemInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType  $lineItemInfo
     */
    public function withLineItemInfo(TransferLineItemInfoType $lineItemInfo): FailedTransferLineItemDataType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedTransferLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
