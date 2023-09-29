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
    public function __construct(ConsolidatedFulfillmentsQPType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(ConsolidatedFulfillmentsQPType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?ConsolidatedFulfillmentsQPType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?ConsolidatedFulfillmentsQPType $queryParams): GetConsolidatedFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
