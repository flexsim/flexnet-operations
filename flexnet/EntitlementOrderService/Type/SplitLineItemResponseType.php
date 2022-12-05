<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SplitLineItemResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitLineItemResponseListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, SplitLineItemResponseListType|null $responseData = null, FailedSplitLineItemListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\SplitLineItemResponseListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSplitLineItemListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, SplitLineItemResponseListType|null $responseData = null, FailedSplitLineItemListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): SplitLineItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): SplitLineItemResponseListType|null
    {
        return $this->responseData;
    }

    public function withResponseData(SplitLineItemResponseListType|null $responseData): SplitLineItemResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): FailedSplitLineItemListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedSplitLineItemListType|null $failedData): SplitLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
