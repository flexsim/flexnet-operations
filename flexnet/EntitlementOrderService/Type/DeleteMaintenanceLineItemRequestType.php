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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType>  $maintenanceLineItemData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array $maintenanceLineItemData)
    {
        $this->maintenanceLineItemData = $maintenanceLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType>  $maintenanceLineItemData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array $maintenanceLineItemData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType>
     */
    public function getMaintenanceLineItemData(): \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array
    {
        return $this->maintenanceLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType>  $maintenanceLineItemData
     */
    public function withMaintenanceLineItemData(\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemDataType|array $maintenanceLineItemData): \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemRequestType
    {
        $new = clone $this;
        $new->maintenanceLineItemData = $maintenanceLineItemData;

        return $new;
    }
}
