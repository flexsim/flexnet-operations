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
    public function __construct(RemoveEntitlementLineItemDataType $failedData = null, string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    public static function create(RemoveEntitlementLineItemDataType $failedData = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedData(): ?RemoveEntitlementLineItemDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?RemoveEntitlementLineItemDataType $failedData): FailedRemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedRemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
