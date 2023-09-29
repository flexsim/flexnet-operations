<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMaintenanceCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(MaintenanceQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(MaintenanceQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?MaintenanceQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?MaintenanceQueryParametersType $queryParams): GetMaintenanceCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
