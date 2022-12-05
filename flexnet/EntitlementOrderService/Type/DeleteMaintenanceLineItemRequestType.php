<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteMaintenanceLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType>
     */
    private $maintenanceLineItemData;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType>  $maintenanceLineItemData
     */
    public static function create(DeleteMaintenanceLineItemDataType|array $maintenanceLineItemData)
    {
        return new static(...\func_get_args());
    }

    public function __construct(DeleteMaintenanceLineItemDataType $maintenanceLineItemData)
    {
        $this->maintenanceLineItemData = $maintenanceLineItemData;
    }

    public function getMaintenanceLineItemData(): DeleteMaintenanceLineItemDataType|array
    {
        return $this->maintenanceLineItemData;
    }

    public function withMaintenanceLineItemData(DeleteMaintenanceLineItemDataType|array $maintenanceLineItemData): DeleteMaintenanceLineItemRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemData = $maintenanceLineItemData;

        return $new;
    }
}
