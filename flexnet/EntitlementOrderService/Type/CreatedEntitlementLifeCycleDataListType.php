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
    public function __construct(CreatedEntitlementLifeCycleDataType|array $entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null  $entitlementData
     */
    public static function create(CreatedEntitlementLifeCycleDataType|array $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null
     */
    public function getEntitlementData(): CreatedEntitlementLifeCycleDataType|array|null
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType>|null  $entitlementData
     */
    public function withEntitlementData(CreatedEntitlementLifeCycleDataType|array|null $entitlementData): CreatedEntitlementLifeCycleDataListType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
