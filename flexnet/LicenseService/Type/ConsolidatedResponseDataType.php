<?php

namespace Flexnet\LicenseService\Type;

class ConsolidatedResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>
     */
    private $consolidatedLicense;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType> $consolidatedLicense
     */
    public function __construct(\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array $consolidatedLicense)
    {
        $this->consolidatedLicense = $consolidatedLicense;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType> $consolidatedLicense
     */
    public static function create(\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array $consolidatedLicense)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>
     */
    public function getConsolidatedLicense() : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array
    {
        return $this->consolidatedLicense;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType> $consolidatedLicense
     * @return ConsolidatedResponseDataType
     */
    public function withConsolidatedLicense(\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array $consolidatedLicense) : \Flexnet\LicenseService\Type\ConsolidatedResponseDataType
    {
        $new = clone $this;
        $new->consolidatedLicense = $consolidatedLicense;

        return $new;
    }
}

