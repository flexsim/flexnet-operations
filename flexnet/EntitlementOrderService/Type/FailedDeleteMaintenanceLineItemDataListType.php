<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedDeleteMaintenanceLineItemDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType>|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType>|null  $failedData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array|null $failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType>|null  $failedData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType>|null
     */
    public function getFailedData(): \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType>|null  $failedData
     */
    public function withFailedData(\Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataType|array|null $failedData): \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataListType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
