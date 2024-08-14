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
    public function __construct(?\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType $bulkEntitlement = null, ?string $reason = null)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType $bulkEntitlement = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlement(): ?\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(?\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType $bulkEntitlement): \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\FailedUpdateBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
