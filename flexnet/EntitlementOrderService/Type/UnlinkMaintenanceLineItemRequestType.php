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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList)
    {
        $this->unlinkMaintenanceLineItemList = $unlinkMaintenanceLineItemList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList)
    {
        return new static(...\func_get_args());
    }

    public function getUnlinkMaintenanceLineItemList(): \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType
    {
        return $this->unlinkMaintenanceLineItemList;
    }

    public function withUnlinkMaintenanceLineItemList(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList): \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemRequestType
    {
        $new = clone $this;
        $new->unlinkMaintenanceLineItemList = $unlinkMaintenanceLineItemList;

        return $new;
    }
}
