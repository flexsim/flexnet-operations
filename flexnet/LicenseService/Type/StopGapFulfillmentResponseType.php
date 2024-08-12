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
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\StopGapResponseDataType $responseData = null, ?\Flexnet\LicenseService\Type\FailedStopGapResponselistDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\StopGapResponseDataType $responseData = null, ?\Flexnet\LicenseService\Type\FailedStopGapResponselistDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\LicenseService\Type\StopGapResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\LicenseService\Type\StopGapResponseDataType $responseData): \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedStopGapResponselistDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedStopGapResponselistDataType $failedData): \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
