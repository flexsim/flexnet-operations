<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetEntitlementStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>
     */
    private $entitlement;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>  $entitlement
     */
    public static function create(EntitlementStateDataType|array $entitlement)
    {
        return new static(...\func_get_args());
    }

    public function __construct(EntitlementStateDataType $entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>
     */
    public function getEntitlement(): EntitlementStateDataType|array
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>  $entitlement
     * @return SetEntitlementStateRequestType
     */
    public function withEntitlement(EntitlementStateDataType|array $entitlement): SetEntitlementStateRequestType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
