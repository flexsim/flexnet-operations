<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPartNumbersQueryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null
     */
    private $queryParams;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null  $queryParams
     */
    public function __construct(int $pageNumber, int $batchSize, PartNumberQueryParametersType|null $queryParams = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType|null  $queryParams
     */
    public static function create(int $pageNumber, int $batchSize, PartNumberQueryParametersType|null $queryParams = null)
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
    public function withQueryParams(PartNumberQueryParametersType|null $queryParams): GetPartNumbersQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): GetPartNumbersQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): GetPartNumbersQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }
}
