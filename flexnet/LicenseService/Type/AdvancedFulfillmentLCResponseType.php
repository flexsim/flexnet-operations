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
    public function __construct(StatusInfoType $statusInfo, AdvancedFmtLCResponseDataListType $responseData = null, FailedAdvancedFmtLCResponseDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, AdvancedFmtLCResponseDataListType $responseData = null, FailedAdvancedFmtLCResponseDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?AdvancedFmtLCResponseDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?AdvancedFmtLCResponseDataListType $responseData): AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedAdvancedFmtLCResponseDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedAdvancedFmtLCResponseDataType $failedData): AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
