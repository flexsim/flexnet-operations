<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransferEntitlementsRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferEntitlementsListType
     */
    private $entitlementList;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\TransferEntitlementsListType $entitlementList)
    {
        $this->entitlementList = $entitlementList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\TransferEntitlementsListType $entitlementList)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementList(): \Flexnet\EntitlementOrderService\Type\TransferEntitlementsListType
    {
        return $this->entitlementList;
    }

    public function withEntitlementList(\Flexnet\EntitlementOrderService\Type\TransferEntitlementsListType $entitlementList): \Flexnet\EntitlementOrderService\Type\TransferEntitlementsRequestType
    {
        $new = clone $this;
        $new->entitlementList = $entitlementList;

        return $new;
    }
}
