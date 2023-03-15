<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductCategoriesRequestType implements RequestInterface
{
    /**
     * @var int|null
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
     * @param  int|null  $pageNumber
     */
    public function __construct(int $batchSize, bool $returnContainedObjects, int|null $pageNumber = null)
    {
        $this->batchSize = $batchSize;
        $this->returnContainedObjects = $returnContainedObjects;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param  int|null  $pageNumber
     */
    public static function create(int $batchSize, bool $returnContainedObjects, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getPageNumber(): int|null
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int|null $pageNumber): GetProductCategoriesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): GetProductCategoriesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getReturnContainedObjects(): bool
    {
        return $this->returnContainedObjects;
    }

    public function withReturnContainedObjects(bool $returnContainedObjects): GetProductCategoriesRequestType
    {
        $new = clone $this;
        $new->returnContainedObjects = $returnContainedObjects;

        return $new;
    }
}
