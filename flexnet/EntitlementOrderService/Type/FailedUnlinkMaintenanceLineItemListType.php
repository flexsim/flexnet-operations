<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUnlinkMaintenanceLineItemListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null
     */
    private $failedUnlinkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null  $failedUnlinkMaintenanceLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array|null $failedUnlinkMaintenanceLineItem = null)
    {
        $this->failedUnlinkMaintenanceLineItem = $failedUnlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null  $failedUnlinkMaintenanceLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array|null $failedUnlinkMaintenanceLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null
     */
    public function getFailedUnlinkMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array|null
    {
        return $this->failedUnlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null  $failedUnlinkMaintenanceLineItem
     */
    public function withFailedUnlinkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array|null $failedUnlinkMaintenanceLineItem): \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemListType
    {
        $new = clone $this;
        $new->failedUnlinkMaintenanceLineItem = $failedUnlinkMaintenanceLineItem;

        return $new;
    }
}
