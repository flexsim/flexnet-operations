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
    public function __construct(IdentifierQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(IdentifierQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?IdentifierQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?IdentifierQueryParametersType $queryParams): GetModelIdentifiersRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
