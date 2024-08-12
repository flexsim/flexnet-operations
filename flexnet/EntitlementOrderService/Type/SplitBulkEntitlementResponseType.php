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
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType $responseData): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\FailedSplitBulkEntitlementListType $failedData): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
