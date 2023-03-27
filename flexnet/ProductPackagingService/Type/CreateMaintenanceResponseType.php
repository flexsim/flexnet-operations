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
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedMaintenanceDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedMaintenanceDataListType|null $failedData = null, CreatedMaintenanceDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedMaintenanceDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedMaintenanceDataListType|null $failedData = null, CreatedMaintenanceDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreateMaintenanceResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataListType|null
     */
    public function getFailedData(): FailedMaintenanceDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataListType|null  $failedData
     */
    public function withFailedData(FailedMaintenanceDataListType|null $failedData): CreateMaintenanceResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedMaintenanceDataListType|null
     */
    public function getResponseData(): CreatedMaintenanceDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedMaintenanceDataListType|null  $responseData
     */
    public function withResponseData(CreatedMaintenanceDataListType|null $responseData): CreateMaintenanceResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
