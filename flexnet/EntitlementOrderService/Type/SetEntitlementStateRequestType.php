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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array $entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>  $entitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array $entitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>
     */
    public function getEntitlement(): \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType>  $entitlement
     */
    public function withEntitlement(\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType|array $entitlement): \Flexnet\EntitlementOrderService\Type\SetEntitlementStateRequestType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
