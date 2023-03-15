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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType|null  $queryParams
     */
    public function __construct(SuiteQueryParametersType|null $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType|null  $queryParams
     */
    public static function create(SuiteQueryParametersType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType|null
     */
    public function getQueryParams(): SuiteQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteQueryParametersType|null  $queryParams
     */
    public function withQueryParams(SuiteQueryParametersType|null $queryParams): GetUniformSuiteCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
