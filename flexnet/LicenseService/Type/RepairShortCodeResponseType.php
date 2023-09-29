<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class RepairShortCodeResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedRepairShortCodeDataType $failedData = null, RepairedShortCodeDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedRepairShortCodeDataType $failedData = null, RepairedShortCodeDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): RepairShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedRepairShortCodeDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedRepairShortCodeDataType $failedData): RepairShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?RepairedShortCodeDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?RepairedShortCodeDataType $responseData): RepairShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
