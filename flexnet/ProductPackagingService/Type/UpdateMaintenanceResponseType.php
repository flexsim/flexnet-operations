<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class UpdateMaintenanceResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateMaintenanceDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedUpdateMaintenanceDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): UpdateMaintenanceResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataListType|null
     */
    public function getFailedData(): FailedUpdateMaintenanceDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataListType|null  $failedData
     */
    public function withFailedData(FailedUpdateMaintenanceDataListType|null $failedData): UpdateMaintenanceResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
