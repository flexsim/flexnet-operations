<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class CreateFeatureBundleResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedFeatureBundleDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedFeatureBundleDataListType $failedData = null, CreatedFeatureBundleDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedFeatureBundleDataListType $failedData = null, CreatedFeatureBundleDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedFeatureBundleDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedFeatureBundleDataListType $failedData): CreateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?CreatedFeatureBundleDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreatedFeatureBundleDataListType $responseData): CreateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
