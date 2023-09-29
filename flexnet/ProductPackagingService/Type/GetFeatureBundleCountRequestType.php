<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFeatureBundleCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(FeatureBundleQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(FeatureBundleQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?FeatureBundleQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?FeatureBundleQueryParametersType $queryParams): GetFeatureBundleCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
