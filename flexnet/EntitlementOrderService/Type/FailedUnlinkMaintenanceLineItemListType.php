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
    public function __construct(FailedUnlinkMaintenanceLineItemDataType|array $failedUnlinkMaintenanceLineItem = null)
    {
        $this->failedUnlinkMaintenanceLineItem = $failedUnlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null  $failedUnlinkMaintenanceLineItem
     */
    public static function create(FailedUnlinkMaintenanceLineItemDataType|array $failedUnlinkMaintenanceLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null
     */
    public function getFailedUnlinkMaintenanceLineItem(): FailedUnlinkMaintenanceLineItemDataType|array|null
    {
        return $this->failedUnlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemDataType>|null  $failedUnlinkMaintenanceLineItem
     */
    public function withFailedUnlinkMaintenanceLineItem(FailedUnlinkMaintenanceLineItemDataType|array|null $failedUnlinkMaintenanceLineItem): FailedUnlinkMaintenanceLineItemListType
    {
        $new = clone $this;
        $new->failedUnlinkMaintenanceLineItem = $failedUnlinkMaintenanceLineItem;

        return $new;
    }
}
