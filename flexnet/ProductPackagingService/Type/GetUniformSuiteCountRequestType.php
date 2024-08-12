<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUniformSuiteCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\SuiteQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\SuiteQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\ProductPackagingService\Type\SuiteQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\ProductPackagingService\Type\SuiteQueryParametersType $queryParams): \Flexnet\ProductPackagingService\Type\GetUniformSuiteCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
