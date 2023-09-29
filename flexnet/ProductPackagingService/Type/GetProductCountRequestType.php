<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(ProductQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(ProductQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?ProductQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?ProductQueryParametersType $queryParams): GetProductCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
