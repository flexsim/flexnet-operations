<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedEntitlementStateDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType>|null
     */
    private $failedEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType>|null  $failedEntitlement
     */
    public function __construct(FailedEntitlementStateDataType|array $failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType>|null  $failedEntitlement
     */
    public static function create(FailedEntitlementStateDataType|array $failedEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType>|null
     */
    public function getFailedEntitlement(): FailedEntitlementStateDataType|array|null
    {
        return $this->failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType>|null  $failedEntitlement
     */
    public function withFailedEntitlement(FailedEntitlementStateDataType|array|null $failedEntitlement): FailedEntitlementStateDataListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}
