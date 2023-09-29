<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class TransferEntitlementsResponseType extends Result
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
     */
    public function __construct(StatusInfoType $statusInfo, TransferredEntitlementsListType $responseData = null, FailedTransferEntitlementListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, TransferredEntitlementsListType $responseData = null, FailedTransferEntitlementListType $failedData = null)
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

    public function getResponseData(): ?TransferredEntitlementsListType
    {
        return $this->responseData;
    }

    public function withResponseData(?TransferredEntitlementsListType $responseData): TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedTransferEntitlementListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedTransferEntitlementListType $failedData): TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
