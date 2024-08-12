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
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType $failedData = null, ?\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType $failedData = null, ?\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataListType $failedData): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataListType $responseData): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
