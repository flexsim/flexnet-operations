<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class ReplaceOnlyEntitlementLineItemResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedAddEntitlementLineItemDataListType $failedData = null, AddedEntitlementLineItemDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedAddEntitlementLineItemDataListType $failedData = null, AddedEntitlementLineItemDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): ReplaceOnlyEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedAddEntitlementLineItemDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedAddEntitlementLineItemDataListType $failedData): ReplaceOnlyEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?AddedEntitlementLineItemDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?AddedEntitlementLineItemDataListType $responseData): ReplaceOnlyEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
