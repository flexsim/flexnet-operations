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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|null  $failedData
     * @param  string|null  $reason
     */
    public function __construct(DeleteMaintenanceLineItemDataType|null $failedData = null, string|null $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|null  $failedData
     * @param  string|null  $reason
     */
    public static function create(DeleteMaintenanceLineItemDataType|null $failedData = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|null
     */
    public function getFailedData(): DeleteMaintenanceLineItemDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|null  $failedData
     * @return FailedDeleteMaintenanceLineItemDataType
     */
    public function withFailedData(DeleteMaintenanceLineItemDataType|null $failedData): FailedDeleteMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->reason;
    }

    /**
     * @param  string|null  $reason
     * @return FailedDeleteMaintenanceLineItemDataType
     */
    public function withReason(string|null $reason): FailedDeleteMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
