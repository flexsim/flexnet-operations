<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class SplitBulkEntitlementResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, SplitBulkEntitlementResponseListType|null $responseData = null, FailedSplitBulkEntitlementListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, SplitBulkEntitlementResponseListType|null $responseData = null, FailedSplitBulkEntitlementListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): SplitBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType|null
     */
    public function getResponseData(): SplitBulkEntitlementResponseListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType|null  $responseData
     */
    public function withResponseData(SplitBulkEntitlementResponseListType|null $responseData): SplitBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType|null
     */
    public function getFailedData(): FailedSplitBulkEntitlementListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType|null  $failedData
     */
    public function withFailedData(FailedSplitBulkEntitlementListType|null $failedData): SplitBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
