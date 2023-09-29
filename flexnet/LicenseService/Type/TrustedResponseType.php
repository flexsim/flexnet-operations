<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class TrustedResponseType extends Result
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
     */
    public function __construct(StatusInfoType $statusInfo, ActivationDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, ActivationDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): TrustedResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?ActivationDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?ActivationDataType $responseData): TrustedResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
