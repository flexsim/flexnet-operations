<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMatchingBulkEntsResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, GetMatchingBulkEntsResponseListType|null $responseData = null, FailedMatchingBulkEntsListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, GetMatchingBulkEntsResponseListType|null $responseData = null, FailedMatchingBulkEntsListType|null $failedData = null)
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

    public function getResponseData(): GetMatchingBulkEntsResponseListType|null
    {
        return $this->responseData;
    }

    public function withResponseData(GetMatchingBulkEntsResponseListType|null $responseData): GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): FailedMatchingBulkEntsListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedMatchingBulkEntsListType|null $failedData): GetMatchingBulkEntsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
