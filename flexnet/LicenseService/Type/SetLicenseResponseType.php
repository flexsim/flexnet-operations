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
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\SetLicenseResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType $failedData): \Flexnet\LicenseService\Type\SetLicenseResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
