<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchActivatableItemRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
     */
    private $activatableItemSearchCriteria;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var int|null
     */
    private $pageNumber;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $activatableItemSearchCriteria
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public static function create(SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, int $pageNumber)
    {
        $this->activatableItemSearchCriteria = $activatableItemSearchCriteria;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
     */
    public function getActivatableItemSearchCriteria(): SearchActivatableItemDataType
    {
        return $this->activatableItemSearchCriteria;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $activatableItemSearchCriteria
     * @return SearchActivatableItemRequestType
     */
    public function withActivatableItemSearchCriteria(SearchActivatableItemDataType $activatableItemSearchCriteria): SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->activatableItemSearchCriteria = $activatableItemSearchCriteria;

        return $new;
    }

    /**
     * @return int
     */
    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    /**
     * @param  int  $batchSize
     * @return SearchActivatableItemRequestType
     */
    public function withBatchSize(int $batchSize): SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getPageNumber(): int|null
    {
        return $this->pageNumber;
    }

    /**
     * @param  int|null  $pageNumber
     * @return SearchActivatableItemRequestType
     */
    public function withPageNumber(int|null $pageNumber): SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
