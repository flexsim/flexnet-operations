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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $queryParams, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $queryParams, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $queryParams): \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getEntitlementLineItemResponseConfig(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType
    {
        return $this->entitlementLineItemResponseConfig;
    }

    public function withEntitlementLineItemResponseConfig(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig): \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
