<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class EntitlementLifeCycleResponseType extends Result
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
    public function withStatusInfo(StatusInfoType $statusInfo): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType|null
     */
    public function getFailedData(): FailedEntitlementLifeCycleDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType|null  $failedData
     */
    public function withFailedData(FailedEntitlementLifeCycleDataListType|null $failedData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType|null
     */
    public function getResponseData(): CreatedEntitlementLifeCycleDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType|null  $responseData
     */
    public function withResponseData(CreatedEntitlementLifeCycleDataListType|null $responseData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
