<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedSplitBulkEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
     */
    private $bulkEntitlementInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementInfo(): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
    {
        return $this->bulkEntitlementInfo;
    }

    public function withBulkEntitlementInfo(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType $bulkEntitlementInfo): \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlementInfo = $bulkEntitlementInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
