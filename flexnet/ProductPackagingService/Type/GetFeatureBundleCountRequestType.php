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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null  $queryParams
     */
    public function __construct(FeatureBundleQueryParametersType|null $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null  $queryParams
     */
    public static function create(FeatureBundleQueryParametersType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null
     */
    public function getQueryParams(): FeatureBundleQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null  $queryParams
     */
    public function withQueryParams(FeatureBundleQueryParametersType|null $queryParams): GetFeatureBundleCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
