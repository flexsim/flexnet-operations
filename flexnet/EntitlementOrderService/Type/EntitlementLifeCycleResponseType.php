<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EntitlementLifeCycleResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType
     */
    private $failedData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType $failedData, CreatedEntitlementLifeCycleDataListType $responseData)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType $failedData, CreatedEntitlementLifeCycleDataListType $responseData)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): FailedEntitlementLifeCycleDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(FailedEntitlementLifeCycleDataListType $failedData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): CreatedEntitlementLifeCycleDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(CreatedEntitlementLifeCycleDataListType $responseData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
