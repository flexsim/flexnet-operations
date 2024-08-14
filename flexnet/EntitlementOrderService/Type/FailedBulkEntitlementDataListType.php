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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null
     */
    public function getFailedBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array|null
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public function withFailedBulkEntitlement(\Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataType|array|null $failedBulkEntitlement): \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataListType
    {
        $new = clone $this;
        $new->failedBulkEntitlement = $failedBulkEntitlement;

        return $new;
    }
}
