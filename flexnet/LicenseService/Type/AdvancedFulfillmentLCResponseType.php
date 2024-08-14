<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class AdvancedFulfillmentLCResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType $responseData = null, ?\Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType $responseData = null, ?\Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType $responseData): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType $failedData): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
