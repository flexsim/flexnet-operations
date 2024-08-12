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
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedLineItem $failedData = null, ?string $resultData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->resultData = $resultData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedLineItem $failedData = null, ?string $resultData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedLineItem
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedLineItem $failedData): \Flexnet\LicenseService\Type\ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResultData(): ?string
    {
        return $this->resultData;
    }

    public function withResultData(?string $resultData): \Flexnet\LicenseService\Type\ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->resultData = $resultData;

        return $new;
    }
}
