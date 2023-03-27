<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class UpdateFeatureBundleResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedUpdateFeatureBundleDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedUpdateFeatureBundleDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): UpdateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataListType|null
     */
    public function getFailedData(): FailedUpdateFeatureBundleDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataListType|null  $failedData
     */
    public function withFailedData(FailedUpdateFeatureBundleDataListType|null $failedData): UpdateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
