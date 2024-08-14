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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, ?int $pageNumber = null)
    {
        $this->activatableItemSearchCriteria = $activatableItemSearchCriteria;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, ?int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivatableItemSearchCriteria(): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        return $this->activatableItemSearchCriteria;
    }

    public function withActivatableItemSearchCriteria(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $activatableItemSearchCriteria): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->activatableItemSearchCriteria = $activatableItemSearchCriteria;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
