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
    public function __construct(LicenseModelIdentifierType|array $licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>  $licenseModelIdentifier
     */
    public static function create(LicenseModelIdentifierType|array $licenseModelIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>
     */
    public function getLicenseModelIdentifier(): LicenseModelIdentifierType|array
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType>  $licenseModelIdentifier
     * @return LicenseModelListType
     */
    public function withLicenseModelIdentifier(LicenseModelIdentifierType|array $licenseModelIdentifier): LicenseModelListType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }
}
