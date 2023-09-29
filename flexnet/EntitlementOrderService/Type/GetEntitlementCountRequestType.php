<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEntitlementCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(SearchEntitlementDataType $queryParams)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(SearchEntitlementDataType $queryParams)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): SearchEntitlementDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(SearchEntitlementDataType $queryParams): GetEntitlementCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
