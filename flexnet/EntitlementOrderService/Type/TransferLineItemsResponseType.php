<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransferLineItemsResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, TransferredLineItemsListType|null $responseData = null, FailedTransferLineItemListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, TransferredLineItemsListType|null $responseData = null, FailedTransferLineItemListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): TransferLineItemsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType|null
     */
    public function getResponseData(): TransferredLineItemsListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredLineItemsListType|null  $responseData
     */
    public function withResponseData(TransferredLineItemsListType|null $responseData): TransferLineItemsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType|null
     */
    public function getFailedData(): FailedTransferLineItemListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferLineItemListType|null  $failedData
     */
    public function withFailedData(FailedTransferLineItemListType|null $failedData): TransferLineItemsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
