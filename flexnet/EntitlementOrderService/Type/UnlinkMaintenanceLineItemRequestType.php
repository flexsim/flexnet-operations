<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UnlinkMaintenanceLineItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType
     */
    private $unlinkMaintenanceLineItemList;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType  $unlinkMaintenanceLineItemList
     */
    public function __construct(UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList)
    {
        $this->unlinkMaintenanceLineItemList = $unlinkMaintenanceLineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType  $unlinkMaintenanceLineItemList
     */
    public static function create(UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType
     */
    public function getUnlinkMaintenanceLineItemList(): UnlinkMaintenanceLineItemListType
    {
        return $this->unlinkMaintenanceLineItemList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType  $unlinkMaintenanceLineItemList
     */
    public function withUnlinkMaintenanceLineItemList(UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList): UnlinkMaintenanceLineItemRequestType
    {
        $new = clone $this;
        $new->unlinkMaintenanceLineItemList = $unlinkMaintenanceLineItemList;

        return $new;
    }
}
