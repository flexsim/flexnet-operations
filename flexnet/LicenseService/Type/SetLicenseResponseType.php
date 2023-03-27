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
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedSetLicenseOnholdFulfillmentListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedSetLicenseOnholdFulfillmentListType|null $failedData = null)
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
     */
    public function withStatusInfo(StatusInfoType $statusInfo): SetLicenseResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null
     */
    public function getFailedData(): FailedSetLicenseOnholdFulfillmentListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null  $failedData
     */
    public function withFailedData(FailedSetLicenseOnholdFulfillmentListType|null $failedData): SetLicenseResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
