<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SplitBulkEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType
     */
    private $bulkEntitlementList;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType  $bulkEntitlementList
     */
    public static function create(SplitBulkEntitlementListType $bulkEntitlementList)
    {
        return new static(...\func_get_args());
    }

    public function __construct(SplitBulkEntitlementListType $bulkEntitlementList)
    {
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType
     */
    public function getBulkEntitlementList(): SplitBulkEntitlementListType
    {
        return $this->bulkEntitlementList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType  $bulkEntitlementList
     * @return SplitBulkEntitlementRequestType
     */
    public function withBulkEntitlementList(SplitBulkEntitlementListType $bulkEntitlementList): SplitBulkEntitlementRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
