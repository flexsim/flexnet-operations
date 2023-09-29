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
     */
    public function __construct(TransferLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    public static function create(TransferLineItemInfoType $lineItemInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemInfo(): TransferLineItemInfoType
    {
        return $this->lineItemInfo;
    }

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
