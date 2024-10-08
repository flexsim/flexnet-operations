<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentAttributesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\LicenseModelIdentifierType
     */
    private $licenseModelIdentifier;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\LicenseModelIdentifierType $licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    public static function create(\Flexnet\LicenseService\Type\LicenseModelIdentifierType $licenseModelIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseModelIdentifier(): \Flexnet\LicenseService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    public function withLicenseModelIdentifier(\Flexnet\LicenseService\Type\LicenseModelIdentifierType $licenseModelIdentifier): \Flexnet\LicenseService\Type\GetFulfillmentAttributesRequestType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }
}
