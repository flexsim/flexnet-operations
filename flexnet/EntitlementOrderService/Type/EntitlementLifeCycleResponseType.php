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
     * @var \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType|null $failedData = null, CreatedEntitlementLifeCycleDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType|null  $failedData
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType|null $failedData = null, CreatedEntitlementLifeCycleDataListType|null $responseData = null)
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

    public function getFailedData(): FailedEntitlementLifeCycleDataListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedEntitlementLifeCycleDataListType|null $failedData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): CreatedEntitlementLifeCycleDataListType|null
    {
        return $this->responseData;
    }

    public function withResponseData(CreatedEntitlementLifeCycleDataListType|null $responseData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
