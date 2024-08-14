<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedAddEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|null
     */
    private $lineItem;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType $lineItem = null, ?string $reason = null)
    {
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType $lineItem = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItem(): ?\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType
    {
        return $this->lineItem;
    }

    public function withLineItem(?\Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType $lineItem): \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
