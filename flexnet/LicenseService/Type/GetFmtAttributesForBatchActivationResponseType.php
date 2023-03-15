<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetFmtAttributesForBatchActivationResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetFmtAttributesForBatchDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetFmtAttributesForBatchDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetFmtAttributesForBatchActivationResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType|null
     */
    public function getResponseData(): GetFmtAttributesForBatchDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType|null  $responseData
     */
    public function withResponseData(GetFmtAttributesForBatchDataType|null $responseData): GetFmtAttributesForBatchActivationResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
