<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetUniformSuitesQueryResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetUniformSuitesQueryResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetUniformSuitesQueryResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetUniformSuitesQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType|null
     */
    public function getResponseData(): GetUniformSuitesQueryResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType|null  $responseData
     */
    public function withResponseData(GetUniformSuitesQueryResponseDataType|null $responseData): GetUniformSuitesQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
