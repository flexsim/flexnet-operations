<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class ReturnShortCodeResponseType extends Result
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
     */
    public function __construct(StatusInfoType $statusInfo, FailedReturnShortCodeDataType $failedData = null, ReturnedShortCodeDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedReturnShortCodeDataType $failedData = null, ReturnedShortCodeDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedReturnShortCodeDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedReturnShortCodeDataType $failedData): ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?ReturnedShortCodeDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?ReturnedShortCodeDataType $responseData): ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
