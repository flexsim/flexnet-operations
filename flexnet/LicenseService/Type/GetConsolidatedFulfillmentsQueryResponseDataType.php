<?php

namespace Flexnet\LicenseService\Type;

class GetConsolidatedFulfillmentsQueryResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null
     */
    private $consolidatedLicense;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null  $consolidatedLicense
     */
    public function __construct(\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array|null $consolidatedLicense = null)
    {
        $this->consolidatedLicense = $consolidatedLicense;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null  $consolidatedLicense
     */
    public static function create(\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array|null $consolidatedLicense = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null
     */
    public function getConsolidatedLicense(): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array|null
    {
        return $this->consolidatedLicense;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null  $consolidatedLicense
     */
    public function withConsolidatedLicense(\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array|null $consolidatedLicense): \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType
    {
        $new = clone $this;
        $new->consolidatedLicense = $consolidatedLicense;

        return $new;
    }
}
