<?php

namespace Flexnet\EntitlementOrderService\Type;

class GetMatchingBulkEntsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType>
     */
    private $bulkEntInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType>  $bulkEntInfo
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array $bulkEntInfo)
    {
        $this->bulkEntInfo = $bulkEntInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType>  $bulkEntInfo
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array $bulkEntInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType>
     */
    public function getBulkEntInfo(): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array
    {
        return $this->bulkEntInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array<\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType>  $bulkEntInfo
     */
    public function withBulkEntInfo(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntInfoType|array $bulkEntInfo): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType
    {
        $new = clone $this;
        $new->bulkEntInfo = $bulkEntInfo;

        return $new;
    }
}
