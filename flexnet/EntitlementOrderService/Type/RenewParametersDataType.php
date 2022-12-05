<?php

namespace Flexnet\EntitlementOrderService\Type;

class RenewParametersDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType
     */
    private $activationId;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType|null
     */
    private $expirationTerms;

    /**
     * @var int|null
     */
    private $numberOfCopies;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var string|null
     */
    private $startDateOption;

    /**
     * @var \DateTimeInterface|null
     */
    private $versionDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null
     */
    private $versionDateAttributes;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $orderLineNumber;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    private $licenseModel;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    private $alternateLicenseModel1;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null
     */
    private $alternateLicenseModel2;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $licenseModelAttributes;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null
     */
    private $policyAttributes;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $lineItemAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType|null  $expirationTerms
     * @param  int|null  $numberOfCopies
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  string|null  $description
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null  $policyAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     */
    public function __construct(IdType $activationId, bool|null $isPermanent = null, ExpirationTermsDataType|null $expirationTerms = null, int|null $numberOfCopies = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $description = null, string|null $orderId = null, string|null $orderLineNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, PolicyAttributesListType|null $policyAttributes = null, string|null $FNPTimeZoneValue = null, AttributeDescriptorDataType|null $lineItemAttributes = null)
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
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $activationId
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType|null  $expirationTerms
     * @param  int|null  $numberOfCopies
     * @param  \DateTimeInterface|null  $startDate
     * @param  string|null  $startDateOption
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType|null  $versionDateAttributes
     * @param  string|null  $description
     * @param  string|null  $orderId
     * @param  string|null  $orderLineNumber
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $licenseModel
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel1
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType|null  $alternateLicenseModel2
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  \Flexnet\EntitlementOrderService\Type\PolicyAttributesListType|null  $policyAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $lineItemAttributes
     */
    public static function create(IdType $activationId, bool|null $isPermanent = null, ExpirationTermsDataType|null $expirationTerms = null, int|null $numberOfCopies = null, \DateTimeInterface|null $startDate = null, string|null $startDateOption = null, \DateTimeInterface|null $versionDate = null, VersionDateAttributesType|null $versionDateAttributes = null, string|null $description = null, string|null $orderId = null, string|null $orderLineNumber = null, LicenseModelIdentifierType|null $licenseModel = null, LicenseModelIdentifierType|null $alternateLicenseModel1 = null, LicenseModelIdentifierType|null $alternateLicenseModel2 = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, PolicyAttributesListType|null $policyAttributes = null, string|null $FNPTimeZoneValue = null, AttributeDescriptorDataType|null $lineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): IdType
    {
        return $this->activationId;
    }

    public function withActivationId(IdType $activationId): RenewParametersDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): RenewParametersDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationTerms(): ExpirationTermsDataType|null
    {
        return $this->expirationTerms;
    }

    public function withExpirationTerms(ExpirationTermsDataType|null $expirationTerms): RenewParametersDataType
    {
        $new = clone $this;
        $new->expirationTerms = $expirationTerms;

        return $new;
    }

    public function getNumberOfCopies(): int|null
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(int|null $numberOfCopies): RenewParametersDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): RenewParametersDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): string|null
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(string|null $startDateOption): RenewParametersDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(\DateTimeInterface|null $versionDate): RenewParametersDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): VersionDateAttributesType|null
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(VersionDateAttributesType|null $versionDateAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): RenewParametersDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getOrderId(): string|null
    {
        return $this->orderId;
    }

    public function withOrderId(string|null $orderId): RenewParametersDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): string|null
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(string|null $orderLineNumber): RenewParametersDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getLicenseModel(): LicenseModelIdentifierType|null
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): RenewParametersDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(LicenseModelIdentifierType|null $alternateLicenseModel1): RenewParametersDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): LicenseModelIdentifierType|null
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(LicenseModelIdentifierType|null $alternateLicenseModel2): RenewParametersDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getPolicyAttributes(): PolicyAttributesListType|null
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(PolicyAttributesListType|null $policyAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): RenewParametersDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getLineItemAttributes(): AttributeDescriptorDataType|null
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(AttributeDescriptorDataType|null $lineItemAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
