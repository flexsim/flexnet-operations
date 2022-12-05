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
    public function __construct(EntitlementStateChangeDataType|array|null $entitlement = null)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementStateChangeDataType>|null  $entitlement
     */
    public static function create(EntitlementStateChangeDataType|array|null $entitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlement(): EntitlementStateChangeDataType|array|null
    {
        return $this->entitlement;
    }

    public function withEntitlement(EntitlementStateChangeDataType|array|null $entitlement): EntitlementStateChangeListType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}
