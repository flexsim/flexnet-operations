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
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $activatableItemSearchCriteria
     * @param  int|null  $pageNumber
     */
    public function __construct(SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, int|null $pageNumber = null)
    {
        $this->activatableItemSearchCriteria = $activatableItemSearchCriteria;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $activatableItemSearchCriteria
     * @param  int|null  $pageNumber
     */
    public static function create(SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
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
     */
    public function withActivatableItemSearchCriteria(SearchActivatableItemDataType $activatableItemSearchCriteria): SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->activatableItemSearchCriteria = $activatableItemSearchCriteria;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): int|null
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int|null $pageNumber): SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
