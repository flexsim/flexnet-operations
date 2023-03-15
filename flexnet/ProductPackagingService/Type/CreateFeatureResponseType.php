<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateFeatureResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedFeatureDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedFeatureDataListType|null $failedData = null, CreatedFeatureDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedFeatureDataListType|null $failedData = null, CreatedFeatureDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreateFeatureResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureDataListType|null
     */
    public function getFailedData(): FailedFeatureDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataListType|null  $failedData
     */
    public function withFailedData(FailedFeatureDataListType|null $failedData): CreateFeatureResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedFeatureDataListType|null
     */
    public function getResponseData(): CreatedFeatureDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedFeatureDataListType|null  $responseData
     */
    public function withResponseData(CreatedFeatureDataListType|null $responseData): CreateFeatureResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
