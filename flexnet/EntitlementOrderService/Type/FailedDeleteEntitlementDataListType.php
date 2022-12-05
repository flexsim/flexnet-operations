<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedDeleteEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null
     */
    private $failedEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null  $failedEntitlement
     */
    public function __construct(FailedDeleteEntitlementDataType|array|null $failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null  $failedEntitlement
     */
    public static function create(FailedDeleteEntitlementDataType|array|null $failedEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedEntitlement(): FailedDeleteEntitlementDataType|array|null
    {
        return $this->failedEntitlement;
    }

    public function withFailedEntitlement(FailedDeleteEntitlementDataType|array|null $failedEntitlement): FailedDeleteEntitlementDataListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}