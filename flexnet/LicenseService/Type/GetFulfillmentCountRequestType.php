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
    public function __construct(?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams = null, ?bool $excludeInactiveObsoleteLineItems = null)
    {
        $this->queryParams = $queryParams;
        $this->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;
    }

    public static function create(?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams = null, ?bool $excludeInactiveObsoleteLineItems = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType $queryParams): \Flexnet\LicenseService\Type\GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getExcludeInactiveObsoleteLineItems(): ?bool
    {
        return $this->excludeInactiveObsoleteLineItems;
    }

    public function withExcludeInactiveObsoleteLineItems(?bool $excludeInactiveObsoleteLineItems): \Flexnet\LicenseService\Type\GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;

        return $new;
    }
}
