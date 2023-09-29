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
    public function __construct(SuiteQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(SuiteQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?SuiteQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?SuiteQueryParametersType $queryParams): GetUniformSuiteCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
