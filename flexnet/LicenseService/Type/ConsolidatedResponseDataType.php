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
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>  $consolidatedLicense
     */
    public function __construct(ConsolidatedLicenseDataType|array $consolidatedLicense)
    {
        $this->consolidatedLicense = $consolidatedLicense;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>  $consolidatedLicense
     */
    public static function create(ConsolidatedLicenseDataType|array $consolidatedLicense)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>
     */
    public function getConsolidatedLicense(): ConsolidatedLicenseDataType|array
    {
        return $this->consolidatedLicense;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>  $consolidatedLicense
     * @return ConsolidatedResponseDataType
     */
    public function withConsolidatedLicense(ConsolidatedLicenseDataType|array $consolidatedLicense): ConsolidatedResponseDataType
    {
        $new = clone $this;
        $new->consolidatedLicense = $consolidatedLicense;

        return $new;
    }
}
