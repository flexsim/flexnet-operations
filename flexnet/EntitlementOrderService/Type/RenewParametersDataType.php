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

    public static function create(IdType $activationId, bool $isPermanent = null, ExpirationTermsDataType $expirationTerms = null, int $numberOfCopies = null, \DateTimeInterface $startDate = null, string $startDateOption = null, \DateTimeInterface $versionDate = null, VersionDateAttributesType $versionDateAttributes = null, string $description = null, string $orderId = null, string $orderLineNumber = null, LicenseModelIdentifierType $licenseModel = null, LicenseModelIdentifierType $alternateLicenseModel1 = null, LicenseModelIdentifierType $alternateLicenseModel2 = null, AttributeDescriptorDataType $licenseModelAttributes = null, PolicyAttributesListType $policyAttributes = null, string $FNPTimeZoneValue = null, AttributeDescriptorDataType $lineItemAttributes = null)
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

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): RenewParametersDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationTerms(): ?ExpirationTermsDataType
    {
        return $this->expirationTerms;
    }

    public function withExpirationTerms(?ExpirationTermsDataType $expirationTerms): RenewParametersDataType
    {
        $new = clone $this;
        $new->expirationTerms = $expirationTerms;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): RenewParametersDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): RenewParametersDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): RenewParametersDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): RenewParametersDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?VersionDateAttributesType $versionDateAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): RenewParametersDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): RenewParametersDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): RenewParametersDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getLicenseModel(): ?LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?LicenseModelIdentifierType $licenseModel): RenewParametersDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?LicenseModelIdentifierType $alternateLicenseModel1): RenewParametersDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?LicenseModelIdentifierType $alternateLicenseModel2): RenewParametersDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): ?AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?AttributeDescriptorDataType $licenseModelAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getPolicyAttributes(): ?PolicyAttributesListType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?PolicyAttributesListType $policyAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): RenewParametersDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getLineItemAttributes(): ?AttributeDescriptorDataType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?AttributeDescriptorDataType $lineItemAttributes): RenewParametersDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
