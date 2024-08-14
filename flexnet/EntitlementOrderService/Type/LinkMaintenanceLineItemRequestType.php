<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LinkMaintenanceLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType
     */
    private $linkMaintenanceLineItemList;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        $this->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        return new static(...\func_get_args());
    }

    public function getLinkMaintenanceLineItemList(): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType
    {
        return $this->linkMaintenanceLineItemList;
    }

    public function withLinkMaintenanceLineItemList(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemRequestType
    {
        $new = clone $this;
        $new->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;

        return $new;
    }
}
