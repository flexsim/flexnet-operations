<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMatchingLineItemsResponseType implements ResultInterface
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

    public function getResponseData(): GetMatchingLineItemsResponseListType|null
    {
        return $this->responseData;
    }

    public function withResponseData(GetMatchingLineItemsResponseListType|null $responseData): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): FailedMatchingLineItemsListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedMatchingLineItemsListType|null $failedData): GetMatchingLineItemsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
