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
     * Constructor
     */
    public function __construct(SearchMaintenanceLineItemDataType $queryParams, EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(SearchMaintenanceLineItemDataType $queryParams, EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): SearchMaintenanceLineItemDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(SearchMaintenanceLineItemDataType $queryParams): SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getEntitlementMaintenanceLineItemResponseConfig(): EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        return $this->entitlementMaintenanceLineItemResponseConfig;
    }

    public function withEntitlementMaintenanceLineItemResponseConfig(EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig): SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
