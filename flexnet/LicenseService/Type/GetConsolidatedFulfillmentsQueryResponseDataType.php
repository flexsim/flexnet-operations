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
    public function __construct(ConsolidatedLicenseDataType|array|null $consolidatedLicense = null)
    {
        $this->consolidatedLicense = $consolidatedLicense;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null  $consolidatedLicense
     */
    public static function create(ConsolidatedLicenseDataType|array|null $consolidatedLicense = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null
     */
    public function getConsolidatedLicense(): ConsolidatedLicenseDataType|array|null
    {
        return $this->consolidatedLicense;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType|array<\Flexnet\LicenseService\Type\ConsolidatedLicenseDataType>|null  $consolidatedLicense
     * @return GetConsolidatedFulfillmentsQueryResponseDataType
     */
    public function withConsolidatedLicense(ConsolidatedLicenseDataType|array|null $consolidatedLicense): GetConsolidatedFulfillmentsQueryResponseDataType
    {
        $new = clone $this;
        $new->consolidatedLicense = $consolidatedLicense;

        return $new;
    }
}
