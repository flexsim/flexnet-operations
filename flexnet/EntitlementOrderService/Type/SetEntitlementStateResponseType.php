<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class SetEntitlementStateResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedEntitlementStateDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedEntitlementStateDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): SetEntitlementStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataListType|null
     */
    public function getFailedData(): FailedEntitlementStateDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataListType|null  $failedData
     */
    public function withFailedData(FailedEntitlementStateDataListType|null $failedData): SetEntitlementStateResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
