<?php

namespace Flexnet\EntitlementOrderService\Type;

class UnlinkMaintenanceLineItemListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>
     */
    private $unlinkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>  $unlinkMaintenanceLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>  $unlinkMaintenanceLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>
     */
    public function getUnlinkMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array
    {
        return $this->unlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>  $unlinkMaintenanceLineItem
     */
    public function withUnlinkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem): \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType
    {
        $new = clone $this;
        $new->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;

        return $new;
    }
}
