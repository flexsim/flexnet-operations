<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null
     */
    private $queryParams;

    /**
     * @var bool|null
     */
    private $excludeInactiveObsoleteLineItems;

    /**
     * Constructor
     */
    public function __construct(FulfillmentsQueryParametersType $queryParams = null, bool $excludeInactiveObsoleteLineItems = null)
    {
        $this->queryParams = $queryParams;
        $this->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;
    }

    public static function create(FulfillmentsQueryParametersType $queryParams = null, bool $excludeInactiveObsoleteLineItems = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?FulfillmentsQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?FulfillmentsQueryParametersType $queryParams): GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getExcludeInactiveObsoleteLineItems(): ?bool
    {
        return $this->excludeInactiveObsoleteLineItems;
    }

    public function withExcludeInactiveObsoleteLineItems(?bool $excludeInactiveObsoleteLineItems): GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;

        return $new;
    }
}
