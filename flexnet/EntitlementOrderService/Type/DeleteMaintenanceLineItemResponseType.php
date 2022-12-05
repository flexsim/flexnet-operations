<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteMaintenanceLineItemResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedDeleteMaintenanceLineItemDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteMaintenanceLineItemDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedDeleteMaintenanceLineItemDataListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): DeleteMaintenanceLineItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): FailedDeleteMaintenanceLineItemDataListType|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedDeleteMaintenanceLineItemDataListType|null $failedData): DeleteMaintenanceLineItemResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
