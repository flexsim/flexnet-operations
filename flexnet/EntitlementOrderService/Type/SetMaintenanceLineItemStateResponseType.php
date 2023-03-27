<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class SetMaintenanceLineItemStateResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType|null
     */
    private $failedMaintenanceData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType|null  $failedMaintenanceData
     */
    public function __construct(StatusInfoType $statusInfo, FailedMaintenanceLineItemStateDataListType|null $failedMaintenanceData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedMaintenanceData = $failedMaintenanceData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType|null  $failedMaintenanceData
     */
    public static function create(StatusInfoType $statusInfo, FailedMaintenanceLineItemStateDataListType|null $failedMaintenanceData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): SetMaintenanceLineItemStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType|null
     */
    public function getFailedMaintenanceData(): FailedMaintenanceLineItemStateDataListType|null
    {
        return $this->failedMaintenanceData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType|null  $failedMaintenanceData
     */
    public function withFailedMaintenanceData(FailedMaintenanceLineItemStateDataListType|null $failedMaintenanceData): SetMaintenanceLineItemStateResponseType
    {
        $new = clone $this;
        $new->failedMaintenanceData = $failedMaintenanceData;

        return $new;
    }
}
