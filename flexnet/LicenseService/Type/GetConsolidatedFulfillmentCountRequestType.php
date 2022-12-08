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
     *
     * @param \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams
     */
    public function __construct(\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams
     */
    public static function create(\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null
     */
    public function getQueryParams() : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams
     * @return GetConsolidatedFulfillmentCountRequestType
     */
    public function withQueryParams(\Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType|null $queryParams) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}

