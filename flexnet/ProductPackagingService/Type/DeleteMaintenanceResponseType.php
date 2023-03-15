<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteMaintenanceResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedDeleteMaintenanceDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedDeleteMaintenanceDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): DeleteMaintenanceResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataListType|null
     */
    public function getFailedData(): FailedDeleteMaintenanceDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteMaintenanceDataListType|null  $failedData
     */
    public function withFailedData(FailedDeleteMaintenanceDataListType|null $failedData): DeleteMaintenanceResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
