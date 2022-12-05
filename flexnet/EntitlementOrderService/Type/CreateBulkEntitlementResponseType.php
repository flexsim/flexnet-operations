<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateBulkEntitlementResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedBulkEntitlementDataListType|null $failedData = null, CreatedBulkEntitlementDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedBulkEntitlementDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedBulkEntitlementDataListType|null $failedData = null, CreatedBulkEntitlementDataListType|null $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreateBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): FailedBulkEntitlementDataListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedBulkEntitlementDataListType|null $failedData): CreateBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): CreatedBulkEntitlementDataListType|null
    {
        return $this->responseData;
    }

    public function withResponseData(CreatedBulkEntitlementDataListType|null $responseData): CreateBulkEntitlementResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}