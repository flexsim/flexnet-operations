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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType $queryParams)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType $queryParams)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(\Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType $queryParams): \Flexnet\EntitlementOrderService\Type\GetEntitlementCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
