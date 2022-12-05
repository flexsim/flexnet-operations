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
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     */
    public static function create(LicenseModelIdentifierType $licenseModelIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function __construct(LicenseModelIdentifierType $licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    public function getLicenseModelIdentifier(): LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    public function withLicenseModelIdentifier(LicenseModelIdentifierType $licenseModelIdentifier): GetEntitlementAttributesRequestType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }
}
