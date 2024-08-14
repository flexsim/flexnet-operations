<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetModelIdentifiersRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType $queryParams): \Flexnet\ProductPackagingService\Type\GetModelIdentifiersRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
