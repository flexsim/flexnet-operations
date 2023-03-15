<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedMaintenanceLineItemStateDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType
     */
    private $maintenanceLineItem;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType  $maintenanceLineItem
     */
    public function __construct(MaintenanceLineItemStateDataType $maintenanceLineItem, string $reason)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType  $maintenanceLineItem
     */
    public static function create(MaintenanceLineItemStateDataType $maintenanceLineItem, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType
     */
    public function getMaintenanceLineItem(): MaintenanceLineItemStateDataType
    {
        return $this->maintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType  $maintenanceLineItem
     */
    public function withMaintenanceLineItem(MaintenanceLineItemStateDataType $maintenanceLineItem): FailedMaintenanceLineItemStateDataType
    {
        $new = clone $this;
        $new->maintenanceLineItem = $maintenanceLineItem;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedMaintenanceLineItemStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
