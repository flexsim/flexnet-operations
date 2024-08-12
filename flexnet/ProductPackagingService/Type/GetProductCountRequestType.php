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
    public function __construct(?\Flexnet\ProductPackagingService\Type\ProductQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\ProductQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\ProductPackagingService\Type\ProductQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\ProductPackagingService\Type\ProductQueryParametersType $queryParams): \Flexnet\ProductPackagingService\Type\GetProductCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
