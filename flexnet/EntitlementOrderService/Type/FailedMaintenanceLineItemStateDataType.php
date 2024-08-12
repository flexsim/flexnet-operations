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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType $maintenanceLineItem, string $reason)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType $maintenanceLineItem, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType
    {
        return $this->maintenanceLineItem;
    }

    public function withMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType $maintenanceLineItem): \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType
    {
        $new = clone $this;
        $new->maintenanceLineItem = $maintenanceLineItem;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
