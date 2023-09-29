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
    public function __construct(PartNumberQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    public static function create(PartNumberQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?PartNumberQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?PartNumberQueryParametersType $queryParams): GetPartNumberCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
