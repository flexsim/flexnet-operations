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
     */
    public function __construct(int $pageNumber, int $batchSize, ?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType $queryParams = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
    }

    public static function create(int $pageNumber, int $batchSize, ?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?\Flexnet\ProductPackagingService\Type\PartNumberQueryParametersType $queryParams): \Flexnet\ProductPackagingService\Type\GetPartNumbersQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): \Flexnet\ProductPackagingService\Type\GetPartNumbersQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\ProductPackagingService\Type\GetPartNumbersQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }
}
