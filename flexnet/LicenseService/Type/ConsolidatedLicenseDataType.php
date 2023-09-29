<?php

namespace Flexnet\LicenseService\Type;

class ConsolidatedLicenseDataType
{
    /**
     * @var string
     */
    private $consolidatedLicenseId;

    /**
     * @var string|null
     */
    private $licenseText;

    /**
     * @var string|null
     */
    private $binaryLicense;

    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var string
     */
    private $criteria;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
     */
    private $consolidatedFulfillments;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    private $licenseFiles;

    /**
     * Constructor
     */
    public function __construct(string $consolidatedLicenseId, string $soldTo, string $criteria, FulfillmentIdentifierListType $consolidatedFulfillments, string $licenseText = null, string $binaryLicense = null, string $state = null, LicenseFileDataListType $licenseFiles = null)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
        $this->soldTo = $soldTo;
        $this->criteria = $criteria;
        $this->consolidatedFulfillments = $consolidatedFulfillments;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->state = $state;
        $this->licenseFiles = $licenseFiles;
    }

    public static function create(string $consolidatedLicenseId, string $soldTo, string $criteria, FulfillmentIdentifierListType $consolidatedFulfillments, string $licenseText = null, string $binaryLicense = null, string $state = null, LicenseFileDataListType $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    public function getConsolidatedLicenseId(): string
    {
        return $this->consolidatedLicenseId;
    }

    public function withConsolidatedLicenseId(string $consolidatedLicenseId): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?string
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?string $binaryLicense): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getCriteria(): string
    {
        return $this->criteria;
    }

    public function withCriteria(string $criteria): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->criteria = $criteria;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getConsolidatedFulfillments(): FulfillmentIdentifierListType
    {
        return $this->consolidatedFulfillments;
    }

    public function withConsolidatedFulfillments(FulfillmentIdentifierListType $consolidatedFulfillments): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedFulfillments = $consolidatedFulfillments;

        return $new;
    }

    public function getLicenseFiles(): ?LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?LicenseFileDataListType $licenseFiles): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
