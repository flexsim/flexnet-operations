<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EmergencyFulfillmentResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\EmergencyResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, EmergencyResponseDataType|null $responseData = null, FailedEmergencyResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\EmergencyResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, EmergencyResponseDataType|null $responseData = null, FailedEmergencyResponselistDataType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmergencyResponseDataType|null
     */
    public function getResponseData(): EmergencyResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmergencyResponseDataType|null  $responseData
     */
    public function withResponseData(EmergencyResponseDataType|null $responseData): EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null
     */
    public function getFailedData(): FailedEmergencyResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null  $failedData
     */
    public function withFailedData(FailedEmergencyResponselistDataType|null $failedData): EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
