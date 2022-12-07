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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType  $bulkEntitlementResponseConfig
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public function __construct(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, int|null $pageNumber = null)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
        $this->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType  $bulkEntitlementResponseConfig
     * @param  int  $batchSize
     * @param  int|null  $pageNumber
     */
    public static function create(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, int|null $pageNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType
     */
    public function getBulkEntitlementSearchCriteria(): SearchBulkEntitlementDataType
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     * @return GetBulkEntitlementPropertiesRequestType
     */
    public function withBulkEntitlementSearchCriteria(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria): GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
     */
    public function getBulkEntitlementResponseConfig(): BulkEntitlementResponseConfigRequestType
    {
        return $this->bulkEntitlementResponseConfig;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType  $bulkEntitlementResponseConfig
     * @return GetBulkEntitlementPropertiesRequestType
     */
    public function withBulkEntitlementResponseConfig(BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig): GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;

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
     * @return GetBulkEntitlementPropertiesRequestType
     */
    public function withBatchSize(int $batchSize): GetBulkEntitlementPropertiesRequestType
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
     * @return GetBulkEntitlementPropertiesRequestType
     */
    public function withPageNumber(int|null $pageNumber): GetBulkEntitlementPropertiesRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}
