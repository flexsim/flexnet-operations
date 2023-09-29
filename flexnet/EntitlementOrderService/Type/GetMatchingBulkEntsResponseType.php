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
    public function __construct(StatusInfoType $statusInfo, GetMatchingBulkEntsResponseListType $responseData = null, FailedMatchingBulkEntsListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, GetMatchingBulkEntsResponseListType $responseData = null, FailedMatchingBulkEntsListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?GetMatchingBulkEntsResponseListType
    {
        return $this->responseData;
    }

    public function withResponseData(?GetMatchingBulkEntsResponseListType $responseData): GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedMatchingBulkEntsListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedMatchingBulkEntsListType $failedData): GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
