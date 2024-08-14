<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedRemoveEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|null
     */
    private $failedData;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType $failedData = null, ?string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType $failedData = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType $failedData): \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
