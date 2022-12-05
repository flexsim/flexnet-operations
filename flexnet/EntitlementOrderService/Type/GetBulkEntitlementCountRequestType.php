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
     * @param  \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     */
    public static function create(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        return new static(...\func_get_args());
    }

    public function __construct(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
    }

    public function getBulkEntitlementSearchCriteria(): SearchBulkEntitlementDataType
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    public function withBulkEntitlementSearchCriteria(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria): GetBulkEntitlementCountRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $new;
    }
}
