<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetMaintenanceLineItemStateResponseType implements ResultInterface
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

    public function getFailedMaintenanceData(): FailedMaintenanceLineItemStateDataListType|null
    {
        return $this->failedMaintenanceData;
    }

    public function withFailedMaintenanceData(FailedMaintenanceLineItemStateDataListType|null $failedMaintenanceData): SetMaintenanceLineItemStateResponseType
    {
        $new = clone $this;
        $new->failedMaintenanceData = $failedMaintenanceData;

        return $new;
    }
}