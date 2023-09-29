<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseTechnologyDetailsType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType
     */
    private $licenseTechnologyIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseGeneratorsDetailsType
     */
    private $licenseGenerators;

    /**
     * @var \Flexnet\ProductPackagingService\Type\HostTypeListType
     */
    private $hostTypes;

    /**
     * @var string
     */
    private $state;

    /**
     * Constructor
     */
    public function __construct(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, LicenseGeneratorsDetailsType $licenseGenerators, HostTypeListType $hostTypes, string $state)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->licenseGenerators = $licenseGenerators;
        $this->hostTypes = $hostTypes;
        $this->state = $state;
    }

    public static function create(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, LicenseGeneratorsDetailsType $licenseGenerators, HostTypeListType $hostTypes, string $state)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseTechnologyIdentifier(): LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnologyIdentifier;
    }

    public function withLicenseTechnologyIdentifier(LicenseTechnologyIdentifierType $licenseTechnologyIdentifier): LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;

        return $new;
    }

    public function getLicenseGenerators(): LicenseGeneratorsDetailsType
    {
        return $this->licenseGenerators;
    }

    public function withLicenseGenerators(LicenseGeneratorsDetailsType $licenseGenerators): LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->licenseGenerators = $licenseGenerators;

        return $new;
    }

    public function getHostTypes(): HostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(HostTypeListType $hostTypes): LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function withState(string $state): LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }
}
