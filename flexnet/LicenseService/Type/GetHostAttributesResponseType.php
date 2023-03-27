<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetHostAttributesResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetHostAttributesDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetHostAttributesDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetHostAttributesDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetHostAttributesDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetHostAttributesDataType|null $responseData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetHostAttributesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetHostAttributesDataType|null
     */
    public function getResponseData(): GetHostAttributesDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\GetHostAttributesDataType|null  $responseData
     */
    public function withResponseData(GetHostAttributesDataType|null $responseData): GetHostAttributesResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
