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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType  $linkMaintenanceLineItemList
     */
    public function __construct(LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        $this->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType  $linkMaintenanceLineItemList
     */
    public static function create(LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType
     */
    public function getLinkMaintenanceLineItemList(): LinkMaintenanceLineItemListType
    {
        return $this->linkMaintenanceLineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemListType  $linkMaintenanceLineItemList
     * @return LinkMaintenanceLineItemRequestType
     */
    public function withLinkMaintenanceLineItemList(LinkMaintenanceLineItemListType $linkMaintenanceLineItemList): LinkMaintenanceLineItemRequestType
    {
        $new = clone $this;
        $new->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;

        return $new;
    }
}
