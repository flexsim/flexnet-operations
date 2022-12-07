<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMatchingBulkEntsRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType
     */
    private $bulkEntList;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType  $bulkEntList
     */
    public static function create(GetMatchingBulkEntsListType $bulkEntList)
    {
        return new static(...\func_get_args());
    }

    public function __construct(GetMatchingBulkEntsListType $bulkEntList)
    {
        $this->bulkEntList = $bulkEntList;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType
     */
    public function getBulkEntList(): GetMatchingBulkEntsListType
    {
        return $this->bulkEntList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType  $bulkEntList
     * @return GetMatchingBulkEntsRequestType
     */
    public function withBulkEntList(GetMatchingBulkEntsListType $bulkEntList): GetMatchingBulkEntsRequestType
    {
        $new = clone $this;
        $new->bulkEntList = $bulkEntList;

        return $new;
    }
}
