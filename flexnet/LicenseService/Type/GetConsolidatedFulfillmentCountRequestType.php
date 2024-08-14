<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetConsolidatedFulfillmentCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(?\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType $queryParams): \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
