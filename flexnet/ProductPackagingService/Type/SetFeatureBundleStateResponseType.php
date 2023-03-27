<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class SetFeatureBundleStateResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedFeatureBundleStateDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedFeatureBundleStateDataListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): SetFeatureBundleStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataListType|null
     */
    public function getFailedData(): FailedFeatureBundleStateDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataListType|null  $failedData
     */
    public function withFailedData(FailedFeatureBundleStateDataListType|null $failedData): SetFeatureBundleStateResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
