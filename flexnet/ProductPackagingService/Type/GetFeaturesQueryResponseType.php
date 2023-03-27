<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetFeaturesQueryResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetFeaturesQueryResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetFeaturesQueryResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetFeaturesQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseDataType|null
     */
    public function getResponseData(): GetFeaturesQueryResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseDataType|null  $responseData
     */
    public function withResponseData(GetFeaturesQueryResponseDataType|null $responseData): GetFeaturesQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
