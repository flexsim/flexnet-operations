<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBulkEntitlementPropertiesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
     */
    private $bulkEntitlementSearchCriteria;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
     */
    private $bulkEntitlementResponseConfig;

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
    public function __construct(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, int $pageNumber = null)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
        $this->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementSearchCriteria(): SearchBulkEntitlementDataType
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    public function withBulkEntitlementSearchCriteria(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria): GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $new;
    }

    public function getBulkEntitlementResponseConfig(): BulkEntitlementResponseConfigRequestType
    {
        return $this->bulkEntitlementResponseConfig;
    }

    public function withBulkEntitlementResponseConfig(BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig): GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
