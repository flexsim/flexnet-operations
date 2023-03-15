<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLicenseTechnologyQueryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseTechnologyQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyQueryParametersType|null  $queryParams
     */
    public function __construct(LicenseTechnologyQueryParametersType|null $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyQueryParametersType|null  $queryParams
     */
    public static function create(LicenseTechnologyQueryParametersType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseTechnologyQueryParametersType|null
     */
    public function getQueryParams(): LicenseTechnologyQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyQueryParametersType|null  $queryParams
     */
    public function withQueryParams(LicenseTechnologyQueryParametersType|null $queryParams): GetLicenseTechnologyQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
