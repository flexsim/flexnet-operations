<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUpdateBulkEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null
     */
    private $failedBulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public function __construct(FailedUpdateBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public static function create(FailedUpdateBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null
     */
    public function getFailedBulkEntitlement(): FailedUpdateBulkEntitlementDataType|array|null
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null  $failedBulkEntitlement
     * @return FailedUpdateBulkEntitlementDataListType
     */
    public function withFailedBulkEntitlement(FailedUpdateBulkEntitlementDataType|array|null $failedBulkEntitlement): FailedUpdateBulkEntitlementDataListType
    {
        $new = clone $this;
        $new->failedBulkEntitlement = $failedBulkEntitlement;

        return $new;
    }
}
