<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class EmergencyFulfillmentResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\EmergencyResponseDataType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, EmergencyResponseDataType $responseData = null, FailedEmergencyResponselistDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, EmergencyResponseDataType $responseData = null, FailedEmergencyResponselistDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?EmergencyResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?EmergencyResponseDataType $responseData): EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedEmergencyResponselistDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedEmergencyResponselistDataType $failedData): EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
