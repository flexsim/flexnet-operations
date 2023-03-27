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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemsListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, GetMatchingLineItemsResponseListType|null $responseData = null, FailedMatchingLineItemsListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemsListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, GetMatchingLineItemsResponseListType|null $responseData = null, FailedMatchingLineItemsListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseListType|null
     */
    public function getResponseData(): GetMatchingLineItemsResponseListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseListType|null  $responseData
     */
    public function withResponseData(GetMatchingLineItemsResponseListType|null $responseData): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemsListType|null
     */
    public function getFailedData(): FailedMatchingLineItemsListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingLineItemsListType|null  $failedData
     */
    public function withFailedData(FailedMatchingLineItemsListType|null $failedData): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
