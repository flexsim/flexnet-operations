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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>  $entitlement
     */
    public function __construct(EntitlementStateDataType|array $entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>  $entitlement
     */
    public static function create(EntitlementStateDataType|array $entitlement)
    {
        return new static(...\func_get_args());
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
     */
    public function withEntitlement(EntitlementStateDataType|array $entitlement): SetEntitlementStateRequestType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
