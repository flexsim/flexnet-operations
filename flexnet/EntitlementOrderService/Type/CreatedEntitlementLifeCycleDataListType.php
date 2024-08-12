<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedEntitlementLifeCycleDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null
     */
    private $entitlementData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null  $entitlementData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array|null $entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null  $entitlementData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null
     */
    public function getEntitlementData(): \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array|null
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null  $entitlementData
     */
    public function withEntitlementData(\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array|null $entitlementData): \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
