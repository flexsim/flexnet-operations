<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchEntitlementLineItemPropertiesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
     */
    private $queryParams;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType
     */
    private $entitlementLineItemResponseConfig;

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
    public function __construct(SearchActivatableItemDataType $queryParams, EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(SearchActivatableItemDataType $queryParams, EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): SearchActivatableItemDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(SearchActivatableItemDataType $queryParams): SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getEntitlementLineItemResponseConfig(): EntitlementLineItemResponseConfigRequestType
    {
        return $this->entitlementLineItemResponseConfig;
    }

    public function withEntitlementLineItemResponseConfig(EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig): SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
