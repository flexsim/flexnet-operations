<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class GetMatchingLineItemsResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemsListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, GetMatchingLineItemsResponseListType $responseData = null, FailedMatchingLineItemsListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, GetMatchingLineItemsResponseListType $responseData = null, FailedMatchingLineItemsListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?GetMatchingLineItemsResponseListType
    {
        return $this->responseData;
    }

    public function withResponseData(?GetMatchingLineItemsResponseListType $responseData): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedMatchingLineItemsListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedMatchingLineItemsListType $failedData): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
