<?php

namespace Flexsim\FlexnetOperations\Type;

class RenewParametersDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\IdType
     */
    protected $activationId;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExpirationTermsDataType
     */
    protected $expirationTerms;

    /**
     * @var int
     */
    protected $numberOfCopies;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var string
     */
    protected $startDateOption;

    /**
     * @var \DateTimeInterface
     */
    protected $versionDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\VersionDateAttributesType
     */
    protected $versionDateAttributes;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $orderLineNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $licenseModel;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $alternateLicenseModel1;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $alternateLicenseModel2;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $licenseModelAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyAttributesListType
     */
    protected $policyAttributes;

    /**
     * @var string
     */
    protected $FNPTimeZoneValue;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $lineItemAttributes;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\IdType  $activationId
     * @param  bool  $isPermanent
     * @param  \Flexsim\FlexnetOperations\Type\ExpirationTermsDataType  $expirationTerms
     * @param  int  $numberOfCopies
     * @param  \DateTimeInterface  $startDate
     * @param  string  $startDateOption
     * @param  \DateTimeInterface  $versionDate
     * @param  \Flexsim\FlexnetOperations\Type\VersionDateAttributesType  $versionDateAttributes
     * @param  string  $description
     * @param  string  $orderId
     * @param  string  $orderLineNumber
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $licenseModel
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $alternateLicenseModel1
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $alternateLicenseModel2
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $licenseModelAttributes
     * @param  \Flexsim\FlexnetOperations\Type\PolicyAttributesListType  $policyAttributes
     * @param  string  $FNPTimeZoneValue
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $lineItemAttributes
     */
    public function __construct(IdType $activationId, bool $isPermanent = null, ExpirationTermsDataType $expirationTerms = null, int $numberOfCopies = null, \DateTimeInterface $startDate = null, string $startDateOption = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, string $description = null, string $orderId = null, string $orderLineNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, PolicyAttributesListType $policyAttributes = null, string $FNPTimeZoneValue = null, AttributeDescriptorDataType $lineItemAttributes = null)
    {
        $this->activationId = $activationId;
        $this->isPermanent = $isPermanent;
        $this->expirationTerms = $expirationTerms;
        $this->numberOfCopies = $numberOfCopies;
        $this->startDate = $startDate;
        $this->startDateOption = $startDateOption;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->description = $description;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->licenseModel = $licenseModel;
        $this->alternateLicenseModel1 = $alternateLicenseModel1;
        $this->alternateLicenseModel2 = $alternateLicenseModel2;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->policyAttributes = $policyAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->lineItemAttributes = $lineItemAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\IdType  $activationId
     * @param  bool  $isPermanent
     * @param  \Flexsim\FlexnetOperations\Type\ExpirationTermsDataType  $expirationTerms
     * @param  int  $numberOfCopies
     * @param  \DateTimeInterface  $startDate
     * @param  string  $startDateOption
     * @param  \DateTimeInterface  $versionDate
     * @param  \Flexsim\FlexnetOperations\Type\VersionDateAttributesType  $versionDateAttributes
     * @param  string  $description
     * @param  string  $orderId
     * @param  string  $orderLineNumber
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $licenseModel
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $alternateLicenseModel1
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $alternateLicenseModel2
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $licenseModelAttributes
     * @param  \Flexsim\FlexnetOperations\Type\PolicyAttributesListType  $policyAttributes
     * @param  string  $FNPTimeZoneValue
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $lineItemAttributes
     */
    public static function create(IdType $activationId, bool $isPermanent = null, ExpirationTermsDataType $expirationTerms = null, int $numberOfCopies = null, \DateTimeInterface $startDate = null, string $startDateOption = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, string $description = null, string $orderId = null, string $orderLineNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, PolicyAttributesListType $policyAttributes = null, string $FNPTimeZoneValue = null, AttributeDescriptorDataType $lineItemAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\IdType
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\IdType  $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPermanent()
    {
        return $this->isPermanent;
    }

    /**
     * @param  bool  $isPermanent
     * @return $this
     */
    public function setIsPermanent($isPermanent)
    {
        $this->isPermanent = $isPermanent;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExpirationTermsDataType
     */
    public function getExpirationTerms()
    {
        return $this->expirationTerms;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ExpirationTermsDataType  $expirationTerms
     * @return $this
     */
    public function setExpirationTerms($expirationTerms)
    {
        $this->expirationTerms = $expirationTerms;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCopies()
    {
        return $this->numberOfCopies;
    }

    /**
     * @param  int  $numberOfCopies
     * @return $this
     */
    public function setNumberOfCopies($numberOfCopies)
    {
        $this->numberOfCopies = $numberOfCopies;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param  \DateTimeInterface  $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateOption()
    {
        return $this->startDateOption;
    }

    /**
     * @param  string  $startDateOption
     * @return $this
     */
    public function setStartDateOption($startDateOption)
    {
        $this->startDateOption = $startDateOption;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param  \DateTimeInterface  $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\VersionDateAttributesType
     */
    public function getVersionDateAttributes()
    {
        return $this->versionDateAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\VersionDateAttributesType  $versionDateAttributes
     * @return $this
     */
    public function setVersionDateAttributes($versionDateAttributes)
    {
        $this->versionDateAttributes = $versionDateAttributes;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param  string  $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param  string  $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  string  $orderLineNumber
     * @return $this
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getAlternateLicenseModel1()
    {
        return $this->alternateLicenseModel1;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $alternateLicenseModel1
     * @return $this
     */
    public function setAlternateLicenseModel1($alternateLicenseModel1)
    {
        $this->alternateLicenseModel1 = $alternateLicenseModel1;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getAlternateLicenseModel2()
    {
        return $this->alternateLicenseModel2;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType  $alternateLicenseModel2
     * @return $this
     */
    public function setAlternateLicenseModel2($alternateLicenseModel2)
    {
        $this->alternateLicenseModel2 = $alternateLicenseModel2;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLicenseModelAttributes()
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $licenseModelAttributes
     * @return $this
     */
    public function setLicenseModelAttributes($licenseModelAttributes)
    {
        $this->licenseModelAttributes = $licenseModelAttributes;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyAttributesListType
     */
    public function getPolicyAttributes()
    {
        return $this->policyAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\PolicyAttributesListType  $policyAttributes
     * @return $this
     */
    public function setPolicyAttributes($policyAttributes)
    {
        $this->policyAttributes = $policyAttributes;

        return $this;
    }

    /**
     * @return string
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param  string  $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLineItemAttributes()
    {
        return $this->lineItemAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $lineItemAttributes
     * @return $this
     */
    public function setLineItemAttributes($lineItemAttributes)
    {
        $this->lineItemAttributes = $lineItemAttributes;

        return $this;
    }
}
