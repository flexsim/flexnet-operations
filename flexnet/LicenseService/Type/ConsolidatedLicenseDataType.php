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
     * @var \Flexnet\LicenseService\Type\Base64Binary|null
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
     * @var \Flexnet\LicenseService\Type\StateType|null
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
    public function __construct(string $consolidatedLicenseId, string $soldTo, string $criteria, \Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments, ?string $licenseText = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\StateType $state = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null)
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

    public static function create(string $consolidatedLicenseId, string $soldTo, string $criteria, \Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments, ?string $licenseText = null, ?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense = null, ?\Flexnet\LicenseService\Type\StateType $state = null, ?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    public function getConsolidatedLicenseId(): string
    {
        return $this->consolidatedLicenseId;
    }

    public function withConsolidatedLicenseId(string $consolidatedLicenseId): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

        return $new;
    }

    public function getLicenseText(): ?string
    {
        return $this->licenseText;
    }

    public function withLicenseText(?string $licenseText): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    public function getBinaryLicense(): ?\Flexnet\LicenseService\Type\Base64Binary
    {
        return $this->binaryLicense;
    }

    public function withBinaryLicense(?\Flexnet\LicenseService\Type\Base64Binary $binaryLicense): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getCriteria(): string
    {
        return $this->criteria;
    }

    public function withCriteria(string $criteria): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->criteria = $criteria;

        return $new;
    }

    public function getState(): ?\Flexnet\LicenseService\Type\StateType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\LicenseService\Type\StateType $state): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getConsolidatedFulfillments(): \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
    {
        return $this->consolidatedFulfillments;
    }

    public function withConsolidatedFulfillments(\Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedFulfillments = $consolidatedFulfillments;

        return $new;
    }

    public function getLicenseFiles(): ?\Flexnet\LicenseService\Type\LicenseFileDataListType
    {
        return $this->licenseFiles;
    }

    public function withLicenseFiles(?\Flexnet\LicenseService\Type\LicenseFileDataListType $licenseFiles): \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
