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
     */
    public function __construct(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType $failedData = null, CreatedEntitlementLifeCycleDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedEntitlementLifeCycleDataListType $failedData = null, CreatedEntitlementLifeCycleDataListType $responseData = null)
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

    public function getFailedData(): ?FailedEntitlementLifeCycleDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedEntitlementLifeCycleDataListType $failedData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?CreatedEntitlementLifeCycleDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreatedEntitlementLifeCycleDataListType $responseData): EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
