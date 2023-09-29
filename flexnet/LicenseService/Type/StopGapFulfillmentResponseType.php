<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class StopGapFulfillmentResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\StopGapResponseDataType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, StopGapResponseDataType $responseData = null, FailedStopGapResponselistDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, StopGapResponseDataType $responseData = null, FailedStopGapResponselistDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?StopGapResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?StopGapResponseDataType $responseData): StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedStopGapResponselistDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedStopGapResponselistDataType $failedData): StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
