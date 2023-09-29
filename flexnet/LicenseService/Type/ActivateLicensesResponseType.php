<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class ActivateLicensesResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedLineItem|null
     */
    private $failedData;

    /**
     * @var string|null
     */
    private $resultData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedLineItem $failedData = null, string $resultData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->resultData = $resultData;
    }

    public static function create(StatusInfoType $statusInfo, FailedLineItem $failedData = null, string $resultData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedLineItem
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedLineItem $failedData): ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResultData(): ?string
    {
        return $this->resultData;
    }

    public function withResultData(?string $resultData): ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->resultData = $resultData;

        return $new;
    }
}
