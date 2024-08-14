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
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType $bulkEntList)
    {
        $this->bulkEntList = $bulkEntList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType $bulkEntList)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntList(): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType
    {
        return $this->bulkEntList;
    }

    public function withBulkEntList(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsListType $bulkEntList): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsRequestType
    {
        $new = clone $this;
        $new->bulkEntList = $bulkEntList;

        return $new;
    }
}
