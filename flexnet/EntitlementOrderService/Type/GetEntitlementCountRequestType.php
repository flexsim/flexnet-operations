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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType  $queryParams
     */
    public function __construct(SearchEntitlementDataType $queryParams)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType  $queryParams
     */
    public static function create(SearchEntitlementDataType $queryParams)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
     */
    public function getQueryParams(): SearchEntitlementDataType
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType  $queryParams
     */
    public function withQueryParams(SearchEntitlementDataType $queryParams): GetEntitlementCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
