<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchEntitlementMaintenanceLineItemPropertiesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
     */
    private $queryParams;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    private $entitlementMaintenanceLineItemResponseConfig;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var int|null
     */
    private $pageNumber;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType  $queryParams
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType  $entitlementMaintenanceLineItemResponseConfig
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public static function create(SearchMaintenanceLineItemDataType $queryParams, EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(SearchMaintenanceLineItemDataType $queryParams, EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, int $pageNumber)
    {
        $this->queryParams = $queryParams;
        $this->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
     */
    public function getQueryParams(): SearchMaintenanceLineItemDataType
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType  $queryParams
     * @return SearchEntitlementMaintenanceLineItemPropertiesRequestType
     */
    public function withQueryParams(SearchMaintenanceLineItemDataType $queryParams): SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function getEntitlementMaintenanceLineItemResponseConfig(): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        return $this->entitlementMaintenanceLineItemResponseConfig;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType  $entitlementMaintenanceLineItemResponseConfig
     * @return SearchEntitlementMaintenanceLineItemPropertiesRequestType
     */
    public function withEntitlementMaintenanceLineItemResponseConfig(EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig): SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;

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
     * @return SearchEntitlementMaintenanceLineItemPropertiesRequestType
     */
    public function withBatchSize(int $batchSize): SearchEntitlementMaintenanceLineItemPropertiesRequestType
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
     * @return SearchEntitlementMaintenanceLineItemPropertiesRequestType
     */
    public function withPageNumber(int|null $pageNumber): SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
