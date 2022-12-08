<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ActivateLicensesResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedLineItem|null  $failedData
     * @param  string|null  $resultData
     */
    public function __construct(StatusInfoType $statusInfo, FailedLineItem|null $failedData = null, string|null $resultData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->resultData = $resultData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedLineItem|null  $failedData
     * @param  string|null  $resultData
     */
    public static function create(StatusInfoType $statusInfo, FailedLineItem|null $failedData = null, string|null $resultData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @return ActivateLicensesResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedLineItem|null
     */
    public function getFailedData(): FailedLineItem|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedLineItem|null  $failedData
     * @return ActivateLicensesResponseType
     */
    public function withFailedData(FailedLineItem|null $failedData): ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getResultData(): string|null
    {
        return $this->resultData;
    }

    /**
     * @param  string|null  $resultData
     * @return ActivateLicensesResponseType
     */
    public function withResultData(string|null $resultData): ActivateLicensesResponseType
    {
        $new = clone $this;
        $new->resultData = $resultData;

        return $new;
    }
}
