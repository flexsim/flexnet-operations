<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class SetMaintenanceStateResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedMaintenanceStateDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedMaintenanceStateDataListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): SetMaintenanceStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataListType|null
     */
    public function getFailedData(): FailedMaintenanceStateDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceStateDataListType|null  $failedData
     */
    public function withFailedData(FailedMaintenanceStateDataListType|null $failedData): SetMaintenanceStateResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
