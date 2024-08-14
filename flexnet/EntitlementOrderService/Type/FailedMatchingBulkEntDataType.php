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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType $bulkEntInfo, string $reason)
    {
        $this->bulkEntInfo = $bulkEntInfo;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType $bulkEntInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntInfo(): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType
    {
        return $this->bulkEntInfo;
    }

    public function withBulkEntInfo(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType $bulkEntInfo): \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType
    {
        $new = clone $this;
        $new->bulkEntInfo = $bulkEntInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
