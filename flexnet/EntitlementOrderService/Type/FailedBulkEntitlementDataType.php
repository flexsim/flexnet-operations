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
     */
    public function __construct(CreateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->reason = $reason;
    }

    public static function create(CreateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlement(): ?CreateBulkEntitlementDataType
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(?CreateBulkEntitlementDataType $bulkEntitlement): FailedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
