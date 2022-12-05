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
     * @param  \Flexnet\EntitlementOrderService\Type\TransferEntitlementsListType  $entitlementList
     */
    public static function create(TransferEntitlementsListType $entitlementList)
    {
        return new static(...\func_get_args());
    }

    public function __construct(TransferEntitlementsListType $entitlementList)
    {
        $this->entitlementList = $entitlementList;
    }

    public function getEntitlementList(): TransferEntitlementsListType
    {
        return $this->entitlementList;
    }

    public function withEntitlementList(TransferEntitlementsListType $entitlementList): TransferEntitlementsRequestType
    {
        $new = clone $this;
        $new->entitlementList = $entitlementList;

        return $new;
    }
}
