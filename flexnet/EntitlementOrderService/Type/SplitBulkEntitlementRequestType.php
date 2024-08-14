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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType $bulkEntitlementList)
    {
        $this->bulkEntitlementList = $bulkEntitlementList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType $bulkEntitlementList)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementList(): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType
    {
        return $this->bulkEntitlementList;
    }

    public function withBulkEntitlementList(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementListType $bulkEntitlementList): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementList = $bulkEntitlementList;

        return $new;
    }
}
