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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType  $bulkEntitlementInfo
     * @param  string  $reason
     */
    public function __construct(SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType  $bulkEntitlementInfo
     * @param  string  $reason
     */
    public static function create(SplitBulkEntitlementInfoType $bulkEntitlementInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementInfo(): SplitBulkEntitlementInfoType
    {
        return $this->bulkEntitlementInfo;
    }

    public function withBulkEntitlementInfo(SplitBulkEntitlementInfoType $bulkEntitlementInfo): FailedSplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlementInfo = $bulkEntitlementInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedSplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
