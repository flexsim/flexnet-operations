<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedLicenseDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $consolidatedLicenseId;

    /**
     * @var string
     */
    protected $licenseText;

    /**
     * @var string
     */
    protected $binaryLicense;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var string
     */
    protected $criteria;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType
     */
    protected $consolidatedFulfillments;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    protected $licenseFiles;

    /**
     * Constructor
     *
     * @param string $consolidatedLicenseId
     * @param string $soldTo
     * @param string $criteria
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType $consolidatedFulfillments
     * @param string $licenseText
     * @param string $binaryLicense
     * @param string $state
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     */
    public function __construct(
        string $consolidatedLicenseId,
        string $soldTo,
        string $criteria,
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType $consolidatedFulfillments,
        string $licenseText = null,
        string $binaryLicense = null,
        string $state = null,
        \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null
    ) {
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
     * create a new instance of this class
     *
     * @param string $consolidatedLicenseId
     * @param string $soldTo
     * @param string $criteria
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType $consolidatedFulfillments
     * @param string $licenseText
     * @param string $binaryLicense
     * @param string $state
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     */
    public static function create(
        string $consolidatedLicenseId,
        string $soldTo,
        string $criteria,
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType $consolidatedFulfillments,
        string $licenseText = null,
        string $binaryLicense = null,
        string $state = null,
        \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getConsolidatedLicenseId()
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param string $consolidatedLicenseId
     * @return $this
     */
    public function setConsolidatedLicenseId($consolidatedLicenseId)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseText()
    {
        return $this->licenseText;
    }

    /**
     * @param string $licenseText
     * @return $this
     */
    public function setLicenseText($licenseText)
    {
        $this->licenseText = $licenseText;

        return $this;
    }

    /**
     * @return string
     */
    public function getBinaryLicense()
    {
        return $this->binaryLicense;
    }

    /**
     * @param string $binaryLicense
     * @return $this
     */
    public function setBinaryLicense($binaryLicense)
    {
        $this->binaryLicense = $binaryLicense;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param string $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType
     */
    public function getConsolidatedFulfillments()
    {
        return $this->consolidatedFulfillments;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierListType $consolidatedFulfillments
     * @return $this
     */
    public function setConsolidatedFulfillments($consolidatedFulfillments)
    {
        $this->consolidatedFulfillments = $consolidatedFulfillments;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseFileDataListType
     */
    public function getLicenseFiles()
    {
        return $this->licenseFiles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseFileDataListType $licenseFiles
     * @return $this
     */
    public function setLicenseFiles($licenseFiles)
    {
        $this->licenseFiles = $licenseFiles;

        return $this;
    }
}
