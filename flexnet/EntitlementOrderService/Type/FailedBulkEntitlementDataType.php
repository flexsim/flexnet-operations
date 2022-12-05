<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedBulkEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|null
     */
    private $bulkEntitlement;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|null  $bulkEntitlement
     * @param  string|null  $reason
     */
    public function __construct(CreateBulkEntitlementDataType|null $bulkEntitlement = null, string|null $reason = null)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|null  $bulkEntitlement
     * @param  string|null  $reason
     */
    public static function create(CreateBulkEntitlementDataType|null $bulkEntitlement = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlement(): CreateBulkEntitlementDataType|null
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(CreateBulkEntitlementDataType|null $bulkEntitlement): FailedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}