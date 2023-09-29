<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUpdateEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|null
     */
    private $failedData;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(UpdateEntitlementLineItemDataType $failedData = null, string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    public static function create(UpdateEntitlementLineItemDataType $failedData = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedData(): ?UpdateEntitlementLineItemDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?UpdateEntitlementLineItemDataType $failedData): FailedUpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
