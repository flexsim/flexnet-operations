<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPartNumberCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType $queryParams): \Flexnet\ProductPackagingService\Type\GetPartNumberCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
