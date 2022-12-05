<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransferEntitlementsResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, TransferredEntitlementsListType|null $responseData = null, FailedTransferEntitlementListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType|null  $responseData
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, TransferredEntitlementsListType|null $responseData = null, FailedTransferEntitlementListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): TransferredEntitlementsListType|null
    {
        return $this->responseData;
    }

    public function withResponseData(TransferredEntitlementsListType|null $responseData): TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): FailedTransferEntitlementListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedTransferEntitlementListType|null $failedData): TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}