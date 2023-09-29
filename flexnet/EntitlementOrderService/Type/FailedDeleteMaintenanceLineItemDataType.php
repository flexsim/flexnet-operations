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
    public function __construct(DeleteMaintenanceLineItemDataType $failedData = null, string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    public static function create(DeleteMaintenanceLineItemDataType $failedData = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedData(): ?DeleteMaintenanceLineItemDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?DeleteMaintenanceLineItemDataType $failedData): FailedDeleteMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedDeleteMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
