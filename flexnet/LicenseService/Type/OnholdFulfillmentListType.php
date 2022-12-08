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
     * @param  \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType>  $onholdFmtLicenseData
     */
    public function __construct(OnHoldFmtLicenseDataType|array $onholdFmtLicenseData)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType>  $onholdFmtLicenseData
     */
    public static function create(OnHoldFmtLicenseDataType|array $onholdFmtLicenseData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType>
     */
    public function getOnholdFmtLicenseData(): OnHoldFmtLicenseDataType|array
    {
        return $this->onholdFmtLicenseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType|array<\Flexnet\LicenseService\Type\OnHoldFmtLicenseDataType>  $onholdFmtLicenseData
     * @return OnholdFulfillmentListType
     */
    public function withOnholdFmtLicenseData(OnHoldFmtLicenseDataType|array $onholdFmtLicenseData): OnholdFulfillmentListType
    {
        $new = clone $this;
        $new->onholdFmtLicenseData = $onholdFmtLicenseData;

        return $new;
    }
}
