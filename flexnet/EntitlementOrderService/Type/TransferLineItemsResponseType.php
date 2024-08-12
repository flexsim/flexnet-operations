<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class TransferLineItemsResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\TransferLineItemsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType $responseData): \Flexnet\EntitlementOrderService\Type\TransferLineItemsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType $failedData): \Flexnet\EntitlementOrderService\Type\TransferLineItemsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
