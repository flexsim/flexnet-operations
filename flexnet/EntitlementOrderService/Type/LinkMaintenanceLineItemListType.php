<?php

namespace Flexnet\EntitlementOrderService\Type;

class LinkMaintenanceLineItemListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType>
     */
    private $linkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType>  $linkMaintenanceLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType>  $linkMaintenanceLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType>
     */
    public function getLinkMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array
    {
        return $this->linkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType>  $linkMaintenanceLineItem
     */
    public function withLinkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType
    {
        $new = clone $this;
        $new->linkMaintenanceLineItem = $linkMaintenanceLineItem;

        return $new;
    }
}
