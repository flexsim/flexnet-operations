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
     */
    public function __construct(UpdateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->reason = $reason;
    }

    public static function create(UpdateBulkEntitlementDataType $bulkEntitlement = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlement(): ?UpdateBulkEntitlementDataType
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(?UpdateBulkEntitlementDataType $bulkEntitlement): FailedUpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
