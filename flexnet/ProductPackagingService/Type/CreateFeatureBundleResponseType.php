<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateFeatureBundleResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureBundleDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedFeatureBundleDataListType|null $failedData = null, CreatedFeatureBundleDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureBundleDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedFeatureBundleDataListType|null $failedData = null, CreatedFeatureBundleDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataListType|null
     */
    public function getFailedData(): FailedFeatureBundleDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataListType|null  $failedData
     */
    public function withFailedData(FailedFeatureBundleDataListType|null $failedData): CreateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedFeatureBundleDataListType|null
     */
    public function getResponseData(): CreatedFeatureBundleDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureBundleDataListType|null  $responseData
     */
    public function withResponseData(CreatedFeatureBundleDataListType|null $responseData): CreateFeatureBundleResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
