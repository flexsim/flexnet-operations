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
     */
    public function __construct(StatusInfoType $statusInfo, FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedMaintenanceData = $failedMaintenanceData;
    }

    public static function create(StatusInfoType $statusInfo, FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): SetMaintenanceLineItemStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedMaintenanceData(): ?FailedMaintenanceLineItemStateDataListType
    {
        return $this->failedMaintenanceData;
    }

    public function withFailedMaintenanceData(?FailedMaintenanceLineItemStateDataListType $failedMaintenanceData): SetMaintenanceLineItemStateResponseType
    {
        $new = clone $this;
        $new->failedMaintenanceData = $failedMaintenanceData;

        return $new;
    }
}
