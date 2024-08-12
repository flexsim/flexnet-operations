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
     * @var \Flexnet\ProductPackagingService\Type\StateType
     */
    private $state;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexnet\ProductPackagingService\Type\LicenseGeneratorsDetailsType $licenseGenerators, \Flexnet\ProductPackagingService\Type\HostTypeListType $hostTypes, \Flexnet\ProductPackagingService\Type\StateType $state)
    {
        $this->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;
        $this->licenseGenerators = $licenseGenerators;
        $this->hostTypes = $hostTypes;
        $this->state = $state;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier, \Flexnet\ProductPackagingService\Type\LicenseGeneratorsDetailsType $licenseGenerators, \Flexnet\ProductPackagingService\Type\HostTypeListType $hostTypes, \Flexnet\ProductPackagingService\Type\StateType $state)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseTechnologyIdentifier(): \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnologyIdentifier;
    }

    public function withLicenseTechnologyIdentifier(\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnologyIdentifier): \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->licenseTechnologyIdentifier = $licenseTechnologyIdentifier;

        return $new;
    }

    public function getLicenseGenerators(): \Flexnet\ProductPackagingService\Type\LicenseGeneratorsDetailsType
    {
        return $this->licenseGenerators;
    }

    public function withLicenseGenerators(\Flexnet\ProductPackagingService\Type\LicenseGeneratorsDetailsType $licenseGenerators): \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->licenseGenerators = $licenseGenerators;

        return $new;
    }

    public function getHostTypes(): \Flexnet\ProductPackagingService\Type\HostTypeListType
    {
        return $this->hostTypes;
    }

    public function withHostTypes(\Flexnet\ProductPackagingService\Type\HostTypeListType $hostTypes): \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->hostTypes = $hostTypes;

        return $new;
    }

    public function getState(): \Flexnet\ProductPackagingService\Type\StateType
    {
        return $this->state;
    }

    public function withState(\Flexnet\ProductPackagingService\Type\StateType $state): \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }
}
