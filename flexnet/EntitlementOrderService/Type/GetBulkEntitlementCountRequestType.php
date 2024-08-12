<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBulkEntitlementCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
     */
    private $bulkEntitlementSearchCriteria;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementSearchCriteria(): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    public function withBulkEntitlementSearchCriteria(\Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementCountRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $new;
    }
}
