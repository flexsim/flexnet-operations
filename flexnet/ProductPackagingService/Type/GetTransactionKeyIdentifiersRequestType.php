<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTransactionKeyIdentifiersRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType|null
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType|null  $queryParams
     */
    public function __construct(IdentifierQueryParametersType|null $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType|null  $queryParams
     */
    public static function create(IdentifierQueryParametersType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType|null
     */
    public function getQueryParams(): IdentifierQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType|null  $queryParams
     */
    public function withQueryParams(IdentifierQueryParametersType|null $queryParams): GetTransactionKeyIdentifiersRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }
}
