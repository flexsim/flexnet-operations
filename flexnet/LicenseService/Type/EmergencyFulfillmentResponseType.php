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
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\EmergencyResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null $failedData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\EmergencyResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\EmergencyResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null $failedData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\EmergencyResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null $failedData = null)
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
     * @return EmergencyFulfillmentResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmergencyResponseDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\EmergencyResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EmergencyResponseDataType|null $responseData
     * @return EmergencyFulfillmentResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\EmergencyResponseDataType|null $responseData) : \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null $failedData
     * @return EmergencyFulfillmentResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType|null $failedData) : \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

