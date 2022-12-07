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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $queryParams
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType  $entitlementLineItemResponseConfig
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public function __construct(SearchActivatableItemDataType $queryParams, EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, int|null $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $queryParams
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType  $entitlementLineItemResponseConfig
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public static function create(SearchActivatableItemDataType $queryParams, EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
     */
    public function getQueryParams(): SearchActivatableItemDataType
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $queryParams
     * @return SearchEntitlementLineItemPropertiesRequestType
     */
    public function withQueryParams(SearchActivatableItemDataType $queryParams): SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType
     */
    public function getEntitlementLineItemResponseConfig(): EntitlementLineItemResponseConfigRequestType
    {
        return $this->entitlementLineItemResponseConfig;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType  $entitlementLineItemResponseConfig
     * @return SearchEntitlementLineItemPropertiesRequestType
     */
    public function withEntitlementLineItemResponseConfig(EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig): SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;

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
     * @return SearchEntitlementLineItemPropertiesRequestType
     */
    public function withBatchSize(int $batchSize): SearchEntitlementLineItemPropertiesRequestType
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
     * @return SearchEntitlementLineItemPropertiesRequestType
     */
    public function withPageNumber(int|null $pageNumber): SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
