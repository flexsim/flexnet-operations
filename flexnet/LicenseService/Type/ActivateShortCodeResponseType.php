<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ActivateShortCodeResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedShortCodeDataType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedShortCodeDataType|null $failedData
     * @param \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null $responseData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedShortCodeDataType|null $failedData = null, \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedShortCodeDataType|null $failedData
     * @param \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null $responseData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedShortCodeDataType|null $failedData = null, \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null $responseData = null)
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
     * @return ActivateShortCodeResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedShortCodeDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedShortCodeDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedShortCodeDataType|null $failedData
     * @return ActivateShortCodeResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedShortCodeDataType|null $failedData) : \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null $responseData
     * @return ActivateShortCodeResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\CreatedShortCodeDataType|null $responseData) : \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

