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
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemStateDataType>  $maintenanceLineItem
     */
    public static function create(MaintenanceLineItemStateDataType|array $maintenanceLineItem)
    {
        return new static(...\func_get_args());
    }

    public function __construct(MaintenanceLineItemStateDataType $maintenanceLineItem)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
    }

    public function getMaintenanceLineItem(): MaintenanceLineItemStateDataType|array
    {
        return $this->maintenanceLineItem;
    }

    public function withMaintenanceLineItem(MaintenanceLineItemStateDataType|array $maintenanceLineItem): SetMaintenanceLineItemStateRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItem = $maintenanceLineItem;

        return $new;
    }
}
