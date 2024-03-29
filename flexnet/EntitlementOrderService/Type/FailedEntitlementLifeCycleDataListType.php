<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedEntitlementLifeCycleDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null
     */
    private $failedEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null  $failedEntitlement
     */
    public function __construct(FailedEntitlementLifeCycleDataType|array $failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null  $failedEntitlement
     */
    public static function create(FailedEntitlementLifeCycleDataType|array $failedEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null
     */
    public function getFailedEntitlement(): FailedEntitlementLifeCycleDataType|array|null
    {
        return $this->failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null  $failedEntitlement
     */
    public function withFailedEntitlement(FailedEntitlementLifeCycleDataType|array|null $failedEntitlement): FailedEntitlementLifeCycleDataListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}
