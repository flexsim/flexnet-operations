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
    public function __construct(FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData)
    {
        $this->failedFmtData = $failedFmtData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>  $failedFmtData
     */
    public static function create(FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>
     */
    public function getFailedFmtData(): FailedSetLicenseOnholdFulfillmentDataType|array
    {
        return $this->failedFmtData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType>  $failedFmtData
     */
    public function withFailedFmtData(FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData): FailedSetLicenseOnholdFulfillmentListType
    {
        $new = clone $this;
        $new->failedFmtData = $failedFmtData;

        return $new;
    }
}
