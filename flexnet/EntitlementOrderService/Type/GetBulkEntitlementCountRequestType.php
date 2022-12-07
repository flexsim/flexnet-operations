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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     */
    public function __construct(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     */
    public static function create(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
     */
    public function getBulkEntitlementSearchCriteria(): SearchBulkEntitlementDataType
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     * @return GetBulkEntitlementCountRequestType
     */
    public function withBulkEntitlementSearchCriteria(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria): GetBulkEntitlementCountRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $new;
    }
}
