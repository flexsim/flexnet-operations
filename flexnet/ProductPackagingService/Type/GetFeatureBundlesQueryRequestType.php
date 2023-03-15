<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFeatureBundlesQueryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null
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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null  $queryParams
     */
    public function __construct(int $pageNumber, int $batchSize, bool $returnContainedObjects, FeatureBundleQueryParametersType|null $queryParams = null)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->returnContainedObjects = $returnContainedObjects;
        $this->queryParams = $queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null  $queryParams
     */
    public static function create(int $pageNumber, int $batchSize, bool $returnContainedObjects, FeatureBundleQueryParametersType|null $queryParams = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null
     */
    public function getQueryParams(): FeatureBundleQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType|null  $queryParams
     */
    public function withQueryParams(FeatureBundleQueryParametersType|null $queryParams): GetFeatureBundlesQueryRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int $pageNumber): GetFeatureBundlesQueryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): GetFeatureBundlesQueryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getReturnContainedObjects(): bool
    {
        return $this->returnContainedObjects;
    }

    public function withReturnContainedObjects(bool $returnContainedObjects): GetFeatureBundlesQueryRequestType
    {
        $new = clone $this;
        $new->returnContainedObjects = $returnContainedObjects;

        return $new;
    }
}
