<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductsQueryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductQueryParametersType|null
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
     * @var bool
     */
    private $returnContainedObjects;

    /**
     * Constructor
     */
    public function __construct(int $pageNumber, int $batchSize, bool $returnContainedObjects, ProductQueryParametersType $queryParams = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->returnContainedObjects = $returnContainedObjects;
        $this->queryParams = $queryParams;
    }

    public static function create(int $pageNumber, int $batchSize, bool $returnContainedObjects, ProductQueryParametersType $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): ?ProductQueryParametersType
    {
        return $this->queryParams;
    }

    public function withQueryParams(?ProductQueryParametersType $queryParams): GetProductsQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): GetProductsQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): GetProductsQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getReturnContainedObjects(): bool
    {
        return $this->returnContainedObjects;
    }

    public function withReturnContainedObjects(bool $returnContainedObjects): GetProductsQueryRequestType
    {
        $new = clone $this;
        $new->returnContainedObjects = $returnContainedObjects;

        return $new;
    }
}
