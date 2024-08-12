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
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType $responseData = null, ?\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType $responseData): \Flexnet\EntitlementOrderService\Type\TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType $failedData): \Flexnet\EntitlementOrderService\Type\TransferEntitlementsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
