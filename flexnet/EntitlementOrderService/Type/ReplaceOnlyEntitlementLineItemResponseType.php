<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReplaceOnlyEntitlementLineItemResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedAddEntitlementLineItemDataListType|null $failedData = null, AddedEntitlementLineItemDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedAddEntitlementLineItemDataListType|null $failedData = null, AddedEntitlementLineItemDataListType|null $responseData = null)
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

    public function getFailedData(): FailedAddEntitlementLineItemDataListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedAddEntitlementLineItemDataListType|null $failedData): ReplaceOnlyEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): AddedEntitlementLineItemDataListType|null
    {
        return $this->responseData;
    }

    public function withResponseData(AddedEntitlementLineItemDataListType|null $responseData): ReplaceOnlyEntitlementLineItemResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
