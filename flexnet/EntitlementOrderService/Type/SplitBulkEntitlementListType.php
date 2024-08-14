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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array $bulkEntitlementInfo)
    {
        $this->bulkEntitlementInfo = $bulkEntitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>  $bulkEntitlementInfo
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array $bulkEntitlementInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>
     */
    public function getBulkEntitlementInfo(): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array
    {
        return $this->bulkEntitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType>  $bulkEntitlementInfo
     */
    public function withBulkEntitlementInfo(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementInfoType|array $bulkEntitlementInfo): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType
    {
        $new = clone $this;
        $new->bulkEntitlementInfo = $bulkEntitlementInfo;

        return $new;
    }
}
