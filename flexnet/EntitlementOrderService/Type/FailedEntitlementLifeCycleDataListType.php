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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array|null $failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null  $failedEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array|null $failedEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null
     */
    public function getFailedEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array|null
    {
        return $this->failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType>|null  $failedEntitlement
     */
    public function withFailedEntitlement(\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType|array|null $failedEntitlement): \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}
