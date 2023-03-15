<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEntitlementAttributesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
     */
    private $licenseModelIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     */
    public function __construct(LicenseModelIdentifierType $licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     */
    public static function create(LicenseModelIdentifierType $licenseModelIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
     */
    public function getLicenseModelIdentifier(): LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     */
    public function withLicenseModelIdentifier(LicenseModelIdentifierType $licenseModelIdentifier): GetEntitlementAttributesRequestType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }
}
