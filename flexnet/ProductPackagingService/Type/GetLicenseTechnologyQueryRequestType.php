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
     */
    public function __construct(LicenseTechnologyQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(LicenseTechnologyQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?LicenseTechnologyQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?LicenseTechnologyQueryParametersType $queryParams): GetLicenseTechnologyQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
