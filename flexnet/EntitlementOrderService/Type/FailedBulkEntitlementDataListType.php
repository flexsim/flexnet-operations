<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedBulkEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null
     */
    private $failedBulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public function __construct(FailedBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public static function create(FailedBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null
     */
    public function getFailedBulkEntitlement(): FailedBulkEntitlementDataType|array|null
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public function withFailedBulkEntitlement(FailedBulkEntitlementDataType|array|null $failedBulkEntitlement): FailedBulkEntitlementDataListType
    {
        $new = clone $this;
        $new->failedBulkEntitlement = $failedBulkEntitlement;

        return $new;
    }
}
