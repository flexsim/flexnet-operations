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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
        $this->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, ?int $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlementSearchCriteria(): \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    public function withBulkEntitlementSearchCriteria(\Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $new;
    }

    public function getBulkEntitlementResponseConfig(): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        return $this->bulkEntitlementResponseConfig;
    }

    public function withBulkEntitlementResponseConfig(\Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;

        return $new;
    }

    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    public function withBatchSize(int $batchSize): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
