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
    public function __construct(AddEntitlementLineItemDataType $lineItem = null, string $reason = null)
    {
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    public static function create(AddEntitlementLineItemDataType $lineItem = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getLineItem(): ?AddEntitlementLineItemDataType
    {
        return $this->lineItem;
    }

    public function withLineItem(?AddEntitlementLineItemDataType $lineItem): FailedAddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedAddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
