<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMaintenanceCountResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\GetCountResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetCountResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetCountResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetCountResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetCountResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetMaintenanceCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\GetCountResponseDataType|null
     */
    public function getResponseData(): GetCountResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GetCountResponseDataType|null  $responseData
     */
    public function withResponseData(GetCountResponseDataType|null $responseData): GetMaintenanceCountResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}