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
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType  $linkMaintenanceLineItemList
     */
    public static function create(LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        return new static(...\func_get_args());
    }

    public function __construct(LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        $this->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;
    }

    public function getLinkMaintenanceLineItemList(): LinkMaintenanceLineItemListType
    {
        return $this->linkMaintenanceLineItemList;
    }

    public function withLinkMaintenanceLineItemList(LinkMaintenanceLineItemListType $linkMaintenanceLineItemList): LinkMaintenanceLineItemRequestType
    {
        $new = clone $this;
        $new->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;

        return $new;
    }
}
