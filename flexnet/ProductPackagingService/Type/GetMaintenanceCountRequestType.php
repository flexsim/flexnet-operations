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
    public function __construct(?\Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType $queryParams): \Flexnet\ProductPackagingService\Type\GetMaintenanceCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
