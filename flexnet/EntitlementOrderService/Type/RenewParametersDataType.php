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
    public function __construct(\Flexnet\EntitlementOrderService\Type\IdType $activationId, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType $expirationTerms = null, ?int $numberOfCopies = null, ?\DateTimeInterface $startDate = null, ?string $startDateOption = null, ?\DateTimeInterface $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes = null, ?string $description = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes = null, ?string $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $lineItemAttributes = null)
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

    public static function create(\Flexnet\EntitlementOrderService\Type\IdType $activationId, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType $expirationTerms = null, ?int $numberOfCopies = null, ?\DateTimeInterface $startDate = null, ?string $startDateOption = null, ?\DateTimeInterface $versionDate = null, ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes = null, ?string $description = null, ?string $orderId = null, ?string $orderLineNumber = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1 = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2 = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes = null, ?string $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $lineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): \Flexnet\EntitlementOrderService\Type\IdType
    {
        return $this->activationId;
    }

    public function withActivationId(\Flexnet\EntitlementOrderService\Type\IdType $activationId): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationTerms(): ?\Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType
    {
        return $this->expirationTerms;
    }

    public function withExpirationTerms(?\Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType $expirationTerms): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->expirationTerms = $expirationTerms;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getStartDateOption(): ?string
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?string $startDateOption): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?\Flexnet\EntitlementOrderService\Type\VersionDateAttributesType $versionDateAttributes): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function withOrderId(?string $orderId): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?string
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?string $orderLineNumber): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getLicenseModel(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModel): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getAlternateLicenseModel1(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel1;
    }

    public function withAlternateLicenseModel1(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel1): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel1 = $alternateLicenseModel1;

        return $new;
    }

    public function getAlternateLicenseModel2(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->alternateLicenseModel2;
    }

    public function withAlternateLicenseModel2(?\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $alternateLicenseModel2): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->alternateLicenseModel2 = $alternateLicenseModel2;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getPolicyAttributes(): ?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType
    {
        return $this->policyAttributes;
    }

    public function withPolicyAttributes(?\Flexnet\EntitlementOrderService\Type\PolicyAttributesListType $policyAttributes): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->policyAttributes = $policyAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getLineItemAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->lineItemAttributes;
    }

    public function withLineItemAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $lineItemAttributes): \Flexnet\EntitlementOrderService\Type\RenewParametersDataType
    {
        $new = clone $this;
        $new->lineItemAttributes = $lineItemAttributes;

        return $new;
    }
}
