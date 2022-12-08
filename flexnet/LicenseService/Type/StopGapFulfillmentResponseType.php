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
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\StopGapResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null $failedData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\StopGapResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\StopGapResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null $failedData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\StopGapResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo() : \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @return StopGapFulfillmentResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\StopGapResponseDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\StopGapResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StopGapResponseDataType|null $responseData
     * @return StopGapFulfillmentResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\StopGapResponseDataType|null $responseData) : \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null $failedData
     * @return StopGapFulfillmentResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedStopGapResponselistDataType|null $failedData) : \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

