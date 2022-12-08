<?php

namespace Flexnet\LicenseService\Type;

class OnholdFulfillmentListType
{
    /**
     * @var \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType>
     */
    private $onholdFmtLicenseData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType> $onholdFmtLicenseData
     */
    public function __construct(\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array $onholdFmtLicenseData)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType> $onholdFmtLicenseData
     */
    public static function create(\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array $onholdFmtLicenseData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType>
     */
    public function getOnholdFmtLicenseData() : \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array
    {
        return $this->onholdFmtLicenseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType> $onholdFmtLicenseData
     * @return OnholdFulfillmentListType
     */
    public function withOnholdFmtLicenseData(\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array $onholdFmtLicenseData) : \Flexnet\LicenseService\Type\OnholdFulfillmentListType
    {
        $new = clone $this;
        $new->onholdFmtLicenseData = $onholdFmtLicenseData;

        return $new;
    }
}

