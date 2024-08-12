<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class ActivateShortCodeResponseType extends Result
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
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedShortCodeDataType $failedData = null, ?\Flexnet\LicenseService\Type\CreatedShortCodeDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedShortCodeDataType $failedData = null, ?\Flexnet\LicenseService\Type\CreatedShortCodeDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedShortCodeDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedShortCodeDataType $failedData): \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\LicenseService\Type\CreatedShortCodeDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\LicenseService\Type\CreatedShortCodeDataType $responseData): \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
