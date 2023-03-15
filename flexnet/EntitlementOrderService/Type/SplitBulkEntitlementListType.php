<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitBulkEntitlementListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>
     */
    private $bulkEntitlementInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>  $bulkEntitlementInfo
     */
    public function __construct(SplitBulkEntitlementInfoType|array $bulkEntitlementInfo)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>  $bulkEntitlementInfo
     */
    public static function create(SplitBulkEntitlementInfoType|array $bulkEntitlementInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>
     */
    public function getBulkEntitlementInfo(): SplitBulkEntitlementInfoType|array
    {
        return $this->bulkEntitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>  $bulkEntitlementInfo
     */
    public function withBulkEntitlementInfo(SplitBulkEntitlementInfoType|array $bulkEntitlementInfo): SplitBulkEntitlementListType
    {
        $new = clone $this;
        $new->bulkEntitlementInfo = $bulkEntitlementInfo;

        return $new;
    }
}
