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
    public function __construct(LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType>  $linkMaintenanceLineItem
     */
    public static function create(LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem)
    {
        return new static(...\func_get_args());
    }

    public function getLinkMaintenanceLineItem(): LinkMaintenanceLineItemDataType|array
    {
        return $this->linkMaintenanceLineItem;
    }

    public function withLinkMaintenanceLineItem(LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem): LinkMaintenanceLineItemListType
    {
        $new = clone $this;
        $new->linkMaintenanceLineItem = $linkMaintenanceLineItem;

        return $new;
    }
}
