<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TrustedResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\ActivationDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\ActivationDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, ActivationDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\ActivationDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, ActivationDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): TrustedResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ActivationDataType|null
     */
    public function getResponseData(): ActivationDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ActivationDataType|null  $responseData
     */
    public function withResponseData(ActivationDataType|null $responseData): TrustedResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
