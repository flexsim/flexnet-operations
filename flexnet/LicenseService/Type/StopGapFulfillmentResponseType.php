<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class StopGapFulfillmentResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\StopGapResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, StopGapResponseDataType|null $responseData = null, FailedStopGapResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\StopGapResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, StopGapResponseDataType|null $responseData = null, FailedStopGapResponselistDataType|null $failedData = null)
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
     * @return StopGapFulfillmentResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\StopGapResponseDataType|null
     */
    public function getResponseData(): StopGapResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StopGapResponseDataType|null  $responseData
     * @return StopGapFulfillmentResponseType
     */
    public function withResponseData(StopGapResponseDataType|null $responseData): StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null
     */
    public function getFailedData(): FailedStopGapResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null  $failedData
     * @return StopGapFulfillmentResponseType
     */
    public function withFailedData(FailedStopGapResponselistDataType|null $failedData): StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
