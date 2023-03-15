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
     *
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType|null  $queryParams
     */
    public function __construct(MaintenanceQueryParametersType|null $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType|null  $queryParams
     */
    public static function create(MaintenanceQueryParametersType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType|null
     */
    public function getQueryParams(): MaintenanceQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\MaintenanceQueryParametersType|null  $queryParams
     */
    public function withQueryParams(MaintenanceQueryParametersType|null $queryParams): GetMaintenanceCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
