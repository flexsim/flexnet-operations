<?php

namespace Flexnet\EntitlementOrderService\Type;

class LicenseModelListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>
     */
    private $licenseModelIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>  $licenseModelIdentifier
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array $licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>  $licenseModelIdentifier
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array $licenseModelIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>
     */
    public function getLicenseModelIdentifier(): \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>  $licenseModelIdentifier
     */
    public function withLicenseModelIdentifier(\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array $licenseModelIdentifier): \Flexnet\EntitlementOrderService\Type\LicenseModelListType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }
}
