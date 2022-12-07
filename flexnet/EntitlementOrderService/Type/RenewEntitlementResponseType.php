<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RenewEntitlementResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedRenewEntitlementDataListType|null $failedData = null, CreatedRenewEntitlementDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedRenewEntitlementDataListType|null $failedData = null, CreatedRenewEntitlementDataListType|null $responseData = null)
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
     * @return RenewEntitlementResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): RenewEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataListType|null
     */
    public function getFailedData(): FailedRenewEntitlementDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataListType|null  $failedData
     * @return RenewEntitlementResponseType
     */
    public function withFailedData(FailedRenewEntitlementDataListType|null $failedData): RenewEntitlementResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataListType|null
     */
    public function getResponseData(): CreatedRenewEntitlementDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataListType|null  $responseData
     * @return RenewEntitlementResponseType
     */
    public function withResponseData(CreatedRenewEntitlementDataListType|null $responseData): RenewEntitlementResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
