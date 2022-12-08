<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetLicenseResponseType implements ResultInterface
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
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null $failedData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null $failedData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo() : \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @return SetLicenseResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\SetLicenseResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null $failedData
     * @return SetLicenseResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType|null $failedData) : \Flexnet\LicenseService\Type\SetLicenseResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

