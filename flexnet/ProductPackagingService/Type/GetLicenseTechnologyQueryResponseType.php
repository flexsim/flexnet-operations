<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetLicenseTechnologyQueryResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseTechnologyDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, LicenseTechnologyDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, LicenseTechnologyDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetLicenseTechnologyQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseTechnologyDataListType|null
     */
    public function getResponseData(): LicenseTechnologyDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyDataListType|null  $responseData
     */
    public function withResponseData(LicenseTechnologyDataListType|null $responseData): GetLicenseTechnologyQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
