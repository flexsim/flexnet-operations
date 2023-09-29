<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class SetLicenseResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedSetLicenseOnholdFulfillmentListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, FailedSetLicenseOnholdFulfillmentListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): SetLicenseResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedSetLicenseOnholdFulfillmentListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedSetLicenseOnholdFulfillmentListType $failedData): SetLicenseResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
