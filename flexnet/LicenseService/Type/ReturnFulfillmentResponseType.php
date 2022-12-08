<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReturnFulfillmentResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\ReturnResponseDataType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\ReturnResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null $failedData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\ReturnResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\ReturnResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null $failedData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\ReturnResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null $failedData = null)
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
     * @return ReturnFulfillmentResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\ReturnFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnResponseDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\ReturnResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnResponseDataType|null $responseData
     * @return ReturnFulfillmentResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\ReturnResponseDataType|null $responseData) : \Flexnet\LicenseService\Type\ReturnFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null $failedData
     * @return ReturnFulfillmentResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedReturnResponselistDataType|null $failedData) : \Flexnet\LicenseService\Type\ReturnFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

