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

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType
     */
    public function getBulkEntitlementInfo(): SplitBulkEntitlementInfoType
    {
        return $this->bulkEntitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType  $bulkEntitlementInfo
     * @return FailedSplitBulkEntitlementDataType
     */
    public function withBulkEntitlementInfo(SplitBulkEntitlementInfoType $bulkEntitlementInfo): FailedSplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlementInfo = $bulkEntitlementInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return FailedSplitBulkEntitlementDataType
     */
    public function withReason(string $reason): FailedSplitBulkEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
