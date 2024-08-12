<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedRenewEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType>|null
     */
    private $failedEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType>|null  $failedEntitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array|null $failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType>|null  $failedEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array|null $failedEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType>|null
     */
    public function getFailedEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array|null
    {
        return $this->failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType>|null  $failedEntitlement
     */
    public function withFailedEntitlement(\Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType|array|null $failedEntitlement): \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}
