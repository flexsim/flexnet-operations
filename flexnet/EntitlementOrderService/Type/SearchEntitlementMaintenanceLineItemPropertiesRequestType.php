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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType $queryParams, \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType $queryParams, \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(\Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType $queryParams): \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getEntitlementMaintenanceLineItemResponseConfig(): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
    {
        return $this->entitlementMaintenanceLineItemResponseConfig;
    }

    public function withEntitlementMaintenanceLineItemResponseConfig(\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig): \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
