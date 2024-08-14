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
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedMaintenanceData = $failedMaintenanceData;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, ?\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedMaintenanceData(): ?\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType
    {
        return $this->failedMaintenanceData;
    }

    public function withFailedMaintenanceData(?\Flexnet\EntitlementOrderService\Type\FailedMaintenanceLineItemStateDataListType $failedMaintenanceData): \Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateResponseType
    {
        $new = clone $this;
        $new->failedMaintenanceData = $failedMaintenanceData;

        return $new;
    }
}
