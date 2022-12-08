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
     *
     * @param  \Flexnet\LicenseService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     */
    public function __construct(LicenseModelIdentifierType $licenseModelIdentifier)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     */
    public static function create(LicenseModelIdentifierType $licenseModelIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseModelIdentifierType
     */
    public function getLicenseModelIdentifier(): LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     * @return GetFulfillmentAttributesRequestType
     */
    public function withLicenseModelIdentifier(LicenseModelIdentifierType $licenseModelIdentifier): GetFulfillmentAttributesRequestType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }
}
