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
     * Constructor
     */
    public function __construct(SplitBulkEntitlementListType $bulkEntitlementList)
    {
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    public static function create(SplitBulkEntitlementListType $bulkEntitlementList)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementList(): SplitBulkEntitlementListType
    {
        return $this->bulkEntitlementList;
    }

    public function withBulkEntitlementList(SplitBulkEntitlementListType $bulkEntitlementList): SplitBulkEntitlementRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
