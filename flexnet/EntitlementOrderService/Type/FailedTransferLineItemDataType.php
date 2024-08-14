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
    public function __construct(\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType $lineItemInfo, string $reason)
    {
        $this->lineItemInfo = $lineItemInfo;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType $lineItemInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getLineItemInfo(): \Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType
    {
        return $this->lineItemInfo;
    }

    public function withLineItemInfo(\Flexnet\EntitlementOrderService\Type\TransferLineItemInfoType $lineItemInfo): \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType
    {
        $new = clone $this;
        $new->lineItemInfo = $lineItemInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
