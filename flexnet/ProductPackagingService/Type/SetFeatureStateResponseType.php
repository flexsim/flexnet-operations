<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class SetFeatureStateResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\SetFeatureStateResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataListType $failedData): \Flexnet\ProductPackagingService\Type\SetFeatureStateResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
