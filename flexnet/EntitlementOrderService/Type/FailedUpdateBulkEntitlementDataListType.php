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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        $this->failedBulkEntitlement = $failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array|null $failedBulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null
     */
    public function getFailedBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array|null
    {
        return $this->failedBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType>|null  $failedBulkEntitlement
     */
    public function withFailedBulkEntitlement(\Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType|array|null $failedBulkEntitlement): \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataListType
    {
        $new = clone $this;
        $new->failedBulkEntitlement = $failedBulkEntitlement;

        return $new;
    }
}
