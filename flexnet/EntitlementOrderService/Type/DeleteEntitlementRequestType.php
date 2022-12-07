<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>
     */
    private $entitlement;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>  $entitlement
     */
    public static function create(DeleteEntitlementDataType|array $entitlement)
    {
        return new static(...\func_get_args());
    }

    public function __construct(DeleteEntitlementDataType $entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>
     */
    public function getEntitlement(): DeleteEntitlementDataType|array
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\DeleteEntitlementDataType>  $entitlement
     * @return DeleteEntitlementRequestType
     */
    public function withEntitlement(DeleteEntitlementDataType|array $entitlement): DeleteEntitlementRequestType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
