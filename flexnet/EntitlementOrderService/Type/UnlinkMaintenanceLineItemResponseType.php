<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UnlinkMaintenanceLineItemResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUnlinkMaintenanceLineItemListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUnlinkMaintenanceLineItemListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedUnlinkMaintenanceLineItemListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): UnlinkMaintenanceLineItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): FailedUnlinkMaintenanceLineItemListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedUnlinkMaintenanceLineItemListType|null $failedData): UnlinkMaintenanceLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
