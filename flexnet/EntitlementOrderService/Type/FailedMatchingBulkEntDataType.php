<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedMatchingBulkEntDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType
     */
    private $bulkEntInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType  $bulkEntInfo
     * @param  string  $reason
     */
    public function __construct(GetMatchingBulkEntInfoType $bulkEntInfo, string $reason)
    {
        $this->bulkEntInfo = $bulkEntInfo;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType  $bulkEntInfo
     * @param  string  $reason
     */
    public static function create(GetMatchingBulkEntInfoType $bulkEntInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType
     */
    public function getBulkEntInfo(): GetMatchingBulkEntInfoType
    {
        return $this->bulkEntInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType  $bulkEntInfo
     * @return FailedMatchingBulkEntDataType
     */
    public function withBulkEntInfo(GetMatchingBulkEntInfoType $bulkEntInfo): FailedMatchingBulkEntDataType
    {
        $new = clone $this;
        $new->bulkEntInfo = $bulkEntInfo;

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
     * @return FailedMatchingBulkEntDataType
     */
    public function withReason(string $reason): FailedMatchingBulkEntDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
