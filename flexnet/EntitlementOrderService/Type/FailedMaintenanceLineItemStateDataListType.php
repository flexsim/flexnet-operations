<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedMaintenanceLineItemStateDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null
     */
    private $failedMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null  $failedMaintenanceLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array|null $failedMaintenanceLineItem = null)
    {
        $this->failedMaintenanceLineItem = $failedMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null  $failedMaintenanceLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array|null $failedMaintenanceLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null
     */
    public function getFailedMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array|null
    {
        return $this->failedMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null  $failedMaintenanceLineItem
     */
    public function withFailedMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array|null $failedMaintenanceLineItem): \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType
    {
        $new = clone $this;
        $new->failedMaintenanceLineItem = $failedMaintenanceLineItem;

        return $new;
    }
}
