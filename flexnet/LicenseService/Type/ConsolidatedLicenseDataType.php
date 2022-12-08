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
     * @param string $consolidatedLicenseId
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param string $soldTo
     * @param string $criteria
     * @param string|null $state
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     */
    public function __construct(string $consolidatedLicenseId, string|null $licenseText = null, string|null $binaryLicense = null, string $soldTo, string $criteria, string|null $state = null, \Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
        $this->licenseText = $licenseText;
        $this->binaryLicense = $binaryLicense;
        $this->soldTo = $soldTo;
        $this->criteria = $criteria;
        $this->state = $state;
        $this->consolidatedFulfillments = $consolidatedFulfillments;
        $this->licenseFiles = $licenseFiles;
    }

    /**
     * @param string $consolidatedLicenseId
     * @param string|null $licenseText
     * @param string|null $binaryLicense
     * @param string $soldTo
     * @param string $criteria
     * @param string|null $state
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     */
    public static function create(string $consolidatedLicenseId, string|null $licenseText = null, string|null $binaryLicense = null, string $soldTo, string $criteria, string|null $state = null, \Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments, \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getConsolidatedLicenseId() : string
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param string $consolidatedLicenseId
     * @return ConsolidatedLicenseDataType
     */
    public function withConsolidatedLicenseId(string $consolidatedLicenseId) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLicenseText() : string|null
    {
        return $this->licenseText;
    }

    /**
     * @param string|null $licenseText
     * @return ConsolidatedLicenseDataType
     */
    public function withLicenseText(string|null $licenseText) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseText = $licenseText;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getBinaryLicense() : string|null
    {
        return $this->binaryLicense;
    }

    /**
     * @param string|null $binaryLicense
     * @return ConsolidatedLicenseDataType
     */
    public function withBinaryLicense(string|null $binaryLicense) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->binaryLicense = $binaryLicense;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoldTo() : string
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return ConsolidatedLicenseDataType
     */
    public function withSoldTo(string $soldTo) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCriteria() : string
    {
        return $this->criteria;
    }

    /**
     * @param string $criteria
     * @return ConsolidatedLicenseDataType
     */
    public function withCriteria(string $criteria) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->criteria = $criteria;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getState() : string|null
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return ConsolidatedLicenseDataType
     */
    public function withState(string|null $state) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
     */
    public function getConsolidatedFulfillments() : \Flexnet\LicenseService\Type\FulfillmentIdentifierListType
    {
        return $this->consolidatedFulfillments;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments
     * @return ConsolidatedLicenseDataType
     */
    public function withConsolidatedFulfillments(\Flexnet\LicenseService\Type\FulfillmentIdentifierListType $consolidatedFulfillments) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->consolidatedFulfillments = $consolidatedFulfillments;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataListType|null
     */
    public function getLicenseFiles() : \Flexnet\LicenseService\Type\LicenseFileDataListType|null
    {
        return $this->licenseFiles;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles
     * @return ConsolidatedLicenseDataType
     */
    public function withLicenseFiles(\Flexnet\LicenseService\Type\LicenseFileDataListType|null $licenseFiles) : \Flexnet\LicenseService\Type\ConsolidatedLicenseDataType
    {
        $new = clone $this;
        $new->licenseFiles = $licenseFiles;

        return $new;
    }
}

