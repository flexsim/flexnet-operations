<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class CreateMaintenanceResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedMaintenanceDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedMaintenanceDataListType $failedData = null, CreatedMaintenanceDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedMaintenanceDataListType $failedData = null, CreatedMaintenanceDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreateMaintenanceResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedMaintenanceDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedMaintenanceDataListType $failedData): CreateMaintenanceResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?CreatedMaintenanceDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreatedMaintenanceDataListType $responseData): CreateMaintenanceResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
