<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedDeleteMaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|null
     */
    private $failedData;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType $failedData = null, ?string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType $failedData = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType $failedData): \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
