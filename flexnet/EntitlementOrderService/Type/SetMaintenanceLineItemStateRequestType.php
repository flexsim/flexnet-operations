<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetMaintenanceLineItemStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType>
     */
    private $maintenanceLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType>  $maintenanceLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array $maintenanceLineItem)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType>  $maintenanceLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array $maintenanceLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType>
     */
    public function getMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array
    {
        return $this->maintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType>  $maintenanceLineItem
     */
    public function withMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array $maintenanceLineItem): \Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItem = $maintenanceLineItem;

        return $new;
    }
}
