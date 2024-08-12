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
     */
    public function __construct(\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData, string $reason)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getOnholdFmtLicenseData(): \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType
    {
        return $this->onholdFmtLicenseData;
    }

    public function withOnholdFmtLicenseData(\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData): \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->onholdFmtLicenseData = $onholdFmtLicenseData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedSetLicenseOnholdFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
