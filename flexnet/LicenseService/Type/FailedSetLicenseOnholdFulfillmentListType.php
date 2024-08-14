<?php

namespace Flexnet\LicenseService\Type;

class FailedSetLicenseOnholdFulfillmentListType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>
     */
    private $failedFmtData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>  $failedFmtData
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData)
    {
        $this->failedFmtData = $failedFmtData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>  $failedFmtData
     */
    public static function create(\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>
     */
    public function getFailedFmtData(): \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array
    {
        return $this->failedFmtData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>  $failedFmtData
     */
    public function withFailedFmtData(\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData): \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentListType
    {
        $new = clone $this;
        $new->failedFmtData = $failedFmtData;

        return $new;
    }
}
