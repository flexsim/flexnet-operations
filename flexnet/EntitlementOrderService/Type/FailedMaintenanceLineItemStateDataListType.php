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
    public function __construct(FailedMaintenanceLineItemStateDataType|array $failedMaintenanceLineItem = null)
    {
        $this->failedMaintenanceLineItem = $failedMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null  $failedMaintenanceLineItem
     */
    public static function create(FailedMaintenanceLineItemStateDataType|array $failedMaintenanceLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null
     */
    public function getFailedMaintenanceLineItem(): FailedMaintenanceLineItemStateDataType|array|null
    {
        return $this->failedMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType>|null  $failedMaintenanceLineItem
     */
    public function withFailedMaintenanceLineItem(FailedMaintenanceLineItemStateDataType|array|null $failedMaintenanceLineItem): FailedMaintenanceLineItemStateDataListType
    {
        $new = clone $this;
        $new->failedMaintenanceLineItem = $failedMaintenanceLineItem;

        return $new;
    }
}
