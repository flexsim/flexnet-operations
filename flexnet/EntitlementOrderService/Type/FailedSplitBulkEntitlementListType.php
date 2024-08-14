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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array $failedBulkEntitlement)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType>  $failedBulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array $failedBulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType>
     */
    public function getFailedBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType>  $failedBulkEntitlement
     */
    public function withFailedBulkEntitlement(\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType|array $failedBulkEntitlement): \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType
    {
        $new = clone $this;
        $new->failedBulkEntitlement = $failedBulkEntitlement;

        return $new;
    }
}
