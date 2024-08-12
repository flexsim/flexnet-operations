<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class GetMatchingBulkEntsResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType $responseData): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType $failedData): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
