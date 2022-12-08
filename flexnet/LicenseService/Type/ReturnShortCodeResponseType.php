<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReturnShortCodeResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null $failedData
     * @param \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null $responseData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null $failedData = null, \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null $failedData
     * @param \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null $responseData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null $failedData = null, \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null $responseData = null)
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
     * @return ReturnShortCodeResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null $failedData
     * @return ReturnShortCodeResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null $failedData) : \Flexnet\LicenseService\Type\ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null $responseData
     * @return ReturnShortCodeResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null $responseData) : \Flexnet\LicenseService\Type\ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

