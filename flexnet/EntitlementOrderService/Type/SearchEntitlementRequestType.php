<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
     */
    private $entitlementSearchCriteria;

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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType $entitlementSearchCriteria, int $batchSize, ?int $pageNumber = null)
    {
        $this->entitlementSearchCriteria = $entitlementSearchCriteria;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType $entitlementSearchCriteria, int $batchSize, ?int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementSearchCriteria(): \Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType
    {
        return $this->entitlementSearchCriteria;
    }

    public function withEntitlementSearchCriteria(\Flexnet\EntitlementOrderService\Type\SearchEntitlementDataType $entitlementSearchCriteria): \Flexnet\EntitlementOrderService\Type\SearchEntitlementRequestType
    {
        $new = clone $this;
        $new->entitlementSearchCriteria = $entitlementSearchCriteria;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\EntitlementOrderService\Type\SearchEntitlementRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): \Flexnet\EntitlementOrderService\Type\SearchEntitlementRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
