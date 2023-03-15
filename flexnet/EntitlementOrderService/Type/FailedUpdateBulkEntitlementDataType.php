<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUpdateBulkEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|null
     */
    private $bulkEntitlement;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|null  $bulkEntitlement
     * @param  string|null  $reason
     */
    public function __construct(UpdateBulkEntitlementDataType|null $bulkEntitlement = null, string|null $reason = null)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|null  $bulkEntitlement
     * @param  string|null  $reason
     */
    public static function create(UpdateBulkEntitlementDataType|null $bulkEntitlement = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|null
     */
    public function getBulkEntitlement(): UpdateBulkEntitlementDataType|null
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|null  $bulkEntitlement
     */
    public function withBulkEntitlement(UpdateBulkEntitlementDataType|null $bulkEntitlement): FailedUpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
