<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementStateChangeListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType>|null
     */
    private $entitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType>|null  $entitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array|null $entitlement = null)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType>|null  $entitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array|null $entitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType>|null
     */
    public function getEntitlement(): \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array|null
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType>|null  $entitlement
     */
    public function withEntitlement(\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array|null $entitlement): \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeListType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
