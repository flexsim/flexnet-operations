<?php

namespace Flexnet\EntitlementOrderService\Type;

class BulkEntitlementResponseConfigRequestType
{
    /**
     * @var bool|null
     */
    private $entitlementId;

    /**
     * @var bool|null
     */
    private $allowPortalLogin;

    /**
     * @var bool|null
     */
    private $description;

    /**
     * @var bool|null
     */
    private $state;

    /**
     * @var bool|null
     */
    private $soldTo;

    /**
     * @var bool|null
     */
    private $soldToDisplayName;

    /**
     * @var bool|null
     */
    private $shipToEmail;

    /**
     * @var bool|null
     */
    private $shipToAddress;

    /**
     * @var bool|null
     */
    private $orderId;

    /**
     * @var bool|null
     */
    private $orderLineNumber;

    /**
     * @var bool|null
     */
    private $product;

    /**
     * @var bool|null
     */
    private $productDescription;

    /**
     * @var bool|null
     */
    private $partNumber;

    /**
     * @var bool|null
     */
    private $partNumberDescription;

    /**
     * @var bool|null
     */
    private $licenseModel;

    /**
     * @var bool|null
     */
    private $licenseTechnology;

    /**
     * @var bool|null
     */
    private $startDateOption;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var bool|null
     */
    private $term;

    /**
     * @var bool|null
     */
    private $expirationDate;

    /**
     * @var bool|null
     */
    private $versionDate;

    /**
     * @var bool|null
     */
    private $versionDateAttributes;

    /**
     * @var bool|null
     */
    private $numberOfCopies;

    /**
     * @var bool|null
     */
    private $bulkEntitlementType;

    /**
     * @var bool|null
     */
    private $createdUserId;

    /**
     * @var bool|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null
     */
    private $customAttributes;

    /**
     * Constructor
     */
    public function __construct(?bool $entitlementId = null, ?bool $allowPortalLogin = null, ?bool $description = null, ?bool $state = null, ?bool $soldTo = null, ?bool $soldToDisplayName = null, ?bool $shipToEmail = null, ?bool $shipToAddress = null, ?bool $orderId = null, ?bool $orderLineNumber = null, ?bool $product = null, ?bool $productDescription = null, ?bool $partNumber = null, ?bool $partNumberDescription = null, ?bool $licenseModel = null, ?bool $licenseTechnology = null, ?bool $startDateOption = null, ?bool $isPermanent = null, ?bool $term = null, ?bool $expirationDate = null, ?bool $versionDate = null, ?bool $versionDateAttributes = null, ?bool $numberOfCopies = null, ?bool $bulkEntitlementType = null, ?bool $createdUserId = null, ?bool $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType $customAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->description = $description;
        $this->state = $state;
        $this->soldTo = $soldTo;
        $this->soldToDisplayName = $soldToDisplayName;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->product = $product;
        $this->productDescription = $productDescription;
        $this->partNumber = $partNumber;
        $this->partNumberDescription = $partNumberDescription;
        $this->licenseModel = $licenseModel;
        $this->licenseTechnology = $licenseTechnology;
        $this->startDateOption = $startDateOption;
        $this->isPermanent = $isPermanent;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
        $this->versionDate = $versionDate;
        $this->versionDateAttributes = $versionDateAttributes;
        $this->numberOfCopies = $numberOfCopies;
        $this->bulkEntitlementType = $bulkEntitlementType;
        $this->createdUserId = $createdUserId;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->customAttributes = $customAttributes;
    }

    public static function create(?bool $entitlementId = null, ?bool $allowPortalLogin = null, ?bool $description = null, ?bool $state = null, ?bool $soldTo = null, ?bool $soldToDisplayName = null, ?bool $shipToEmail = null, ?bool $shipToAddress = null, ?bool $orderId = null, ?bool $orderLineNumber = null, ?bool $product = null, ?bool $productDescription = null, ?bool $partNumber = null, ?bool $partNumberDescription = null, ?bool $licenseModel = null, ?bool $licenseTechnology = null, ?bool $startDateOption = null, ?bool $isPermanent = null, ?bool $term = null, ?bool $expirationDate = null, ?bool $versionDate = null, ?bool $versionDateAttributes = null, ?bool $numberOfCopies = null, ?bool $bulkEntitlementType = null, ?bool $createdUserId = null, ?bool $FNPTimeZoneValue = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType $customAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?bool
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?bool $entitlementId): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getDescription(): ?bool
    {
        return $this->description;
    }

    public function withDescription(?bool $description): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function withState(?bool $state): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getSoldTo(): ?bool
    {
        return $this->soldTo;
    }

    public function withSoldTo(?bool $soldTo): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToDisplayName(): ?bool
    {
        return $this->soldToDisplayName;
    }

    public function withSoldToDisplayName(?bool $soldToDisplayName): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    public function getShipToEmail(): ?bool
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?bool $shipToEmail): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?bool
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?bool $shipToAddress): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getOrderId(): ?bool
    {
        return $this->orderId;
    }

    public function withOrderId(?bool $orderId): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?bool
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?bool $orderLineNumber): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getProduct(): ?bool
    {
        return $this->product;
    }

    public function withProduct(?bool $product): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getProductDescription(): ?bool
    {
        return $this->productDescription;
    }

    public function withProductDescription(?bool $productDescription): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    public function getPartNumber(): ?bool
    {
        return $this->partNumber;
    }

    public function withPartNumber(?bool $partNumber): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getPartNumberDescription(): ?bool
    {
        return $this->partNumberDescription;
    }

    public function withPartNumberDescription(?bool $partNumberDescription): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    public function getLicenseModel(): ?bool
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?bool $licenseModel): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    public function getLicenseTechnology(): ?bool
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?bool $licenseTechnology): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getStartDateOption(): ?bool
    {
        return $this->startDateOption;
    }

    public function withStartDateOption(?bool $startDateOption): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getTerm(): ?bool
    {
        return $this->term;
    }

    public function withTerm(?bool $term): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?bool
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?bool $expirationDate): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getVersionDate(): ?bool
    {
        return $this->versionDate;
    }

    public function withVersionDate(?bool $versionDate): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionDateAttributes(): ?bool
    {
        return $this->versionDateAttributes;
    }

    public function withVersionDateAttributes(?bool $versionDateAttributes): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    public function getNumberOfCopies(): ?bool
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?bool $numberOfCopies): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getBulkEntitlementType(): ?bool
    {
        return $this->bulkEntitlementType;
    }

    public function withBulkEntitlementType(?bool $bulkEntitlementType): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementType = $bulkEntitlementType;

        return $new;
    }

    public function getCreatedUserId(): ?bool
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?bool $createdUserId): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?bool
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?bool $FNPTimeZoneValue): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getCustomAttributes(): ?\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?\Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType $customAttributes): \Flexnet\EntitlementOrderService\Type\BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }
}
