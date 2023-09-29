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
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateMaintenanceDataListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, FailedUpdateMaintenanceDataListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): UpdateMaintenanceResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedUpdateMaintenanceDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedUpdateMaintenanceDataListType $failedData): UpdateMaintenanceResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
