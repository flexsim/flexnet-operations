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
     *
     * @param  string  $consolidatedLicenseId
     * @param  string  $soldTo
     * @param  string  $criteria
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierListType  $consolidatedFulfillments
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  string|null  $state
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     */
    public function __construct(string $consolidatedLicenseId, string $soldTo, string $criteria, FulfillmentIdentifierListType $consolidatedFulfillments, string|null $licenseText = null, string|null $binaryLicense = null, string|null $state = null, LicenseFileDataListType|null $licenseFiles = null)
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

    /**
     * @param  string  $consolidatedLicenseId
     * @param  string  $soldTo
     * @param  string  $criteria
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierListType  $consolidatedFulfillments
     * @param  string|null  $licenseText
     * @param  string|null  $binaryLicense
     * @param  string|null  $state
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     */
    public static function create(string $consolidatedLicenseId, string $soldTo, string $criteria, FulfillmentIdentifierListType $consolidatedFulfillments, string|null $licenseText = null, string|null $binaryLicense = null, string|null $state = null, LicenseFileDataListType|null $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getConsolidatedLicenseId(): string
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param  string  $consolidatedLicenseId
     * @return ConsolidatedLicenseDataType
     */
    public function withConsolidatedLicenseId(string $consolidatedLicenseId): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseText(): string|null
    {
        return $this->licenseText;
    }

    /**
     * @param  string|null  $licenseText
     * @return ConsolidatedLicenseDataType
     */
    public function withLicenseText(string|null $licenseText): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getBinaryLicense(): string|null
    {
        return $this->binaryLicense;
    }

    /**
     * @param  string|null  $binaryLicense
     * @return ConsolidatedLicenseDataType
     */
    public function withBinaryLicense(string|null $binaryLicense): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    /**
     * @param  string  $soldTo
     * @return ConsolidatedLicenseDataType
     */
    public function withSoldTo(string $soldTo): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCriteria(): string
    {
        return $this->criteria;
    }

    /**
     * @param  string  $criteria
     * @return ConsolidatedLicenseDataType
     */
    public function withCriteria(string $criteria): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->criteria = $criteria;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getState(): string|null
    {
        return $this->state;
    }

    /**
     * @param  string|null  $state
     * @return ConsolidatedLicenseDataType
     */
    public function withState(string|null $state): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
     */
    public function getConsolidatedFulfillments(): FulfillmentIdentifierListType
    {
        return $this->consolidatedFulfillments;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierListType  $consolidatedFulfillments
     * @return ConsolidatedLicenseDataType
     */
    public function withConsolidatedFulfillments(FulfillmentIdentifierListType $consolidatedFulfillments): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedFulfillments = $consolidatedFulfillments;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    public function getLicenseFiles(): LicenseFileDataListType|null
    {
        return $this->licenseFiles;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataListType|null  $licenseFiles
     * @return ConsolidatedLicenseDataType
     */
    public function withLicenseFiles(LicenseFileDataListType|null $licenseFiles): ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}
