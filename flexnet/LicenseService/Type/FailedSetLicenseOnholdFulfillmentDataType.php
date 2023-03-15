<?php

namespace Flexnet\LicenseService\Type;

class FailedSetLicenseOnholdFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType
     */
    private $onholdFmtLicenseData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType  $onholdFmtLicenseData
     */
    public function __construct(OnHoldFmtLicenseDataType $onholdFmtLicenseData, string $reason)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType  $onholdFmtLicenseData
     */
    public static function create(OnHoldFmtLicenseDataType $onholdFmtLicenseData, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType
     */
    public function getOnholdFmtLicenseData(): OnHoldFmtLicenseDataType
    {
        return $this->onholdFmtLicenseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType  $onholdFmtLicenseData
     */
    public function withOnholdFmtLicenseData(OnHoldFmtLicenseDataType $onholdFmtLicenseData): FailedSetLicenseOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->onholdFmtLicenseData = $onholdFmtLicenseData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedSetLicenseOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
