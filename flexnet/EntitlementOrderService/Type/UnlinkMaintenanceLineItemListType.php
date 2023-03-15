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
    public function __construct(UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>  $unlinkMaintenanceLineItem
     */
    public static function create(UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>
     */
    public function getUnlinkMaintenanceLineItem(): UnlinkMaintenanceLineItemDataType|array
    {
        return $this->unlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType>  $unlinkMaintenanceLineItem
     */
    public function withUnlinkMaintenanceLineItem(UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem): UnlinkMaintenanceLineItemListType
    {
        $new = clone $this;
        $new->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;

        return $new;
    }
}
