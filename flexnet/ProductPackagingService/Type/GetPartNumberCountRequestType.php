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
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null  $queryParams
     */
    public function __construct(PartNumberQueryParametersType|null $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null  $queryParams
     */
    public static function create(PartNumberQueryParametersType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null
     */
    public function getQueryParams(): PartNumberQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null  $queryParams
     */
    public function withQueryParams(PartNumberQueryParametersType|null $queryParams): GetPartNumberCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
