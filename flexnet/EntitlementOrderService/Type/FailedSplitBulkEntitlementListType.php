<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedSplitBulkEntitlementListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType>
     */
    private $failedBulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType>  $failedBulkEntitlement
     */
    public function __construct(FailedSplitBulkEntitlementDataType|array $failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType>  $failedBulkEntitlement
     */
    public static function create(FailedSplitBulkEntitlementDataType|array $failedBulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    public function getFailedBulkEntitlement(): FailedSplitBulkEntitlementDataType|array
    {
        return $this->failedBulkEntitlement;
    }

    public function withFailedBulkEntitlement(FailedSplitBulkEntitlementDataType|array $failedBulkEntitlement): FailedSplitBulkEntitlementListType
    {
        $new = clone $this;
        $new->failedBulkEntitlement = $failedBulkEntitlement;

        return $new;
    }
}
