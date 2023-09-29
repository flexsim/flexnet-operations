<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFeatureCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(FeatureQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(FeatureQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?FeatureQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?FeatureQueryParametersType $queryParams): GetFeatureCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
