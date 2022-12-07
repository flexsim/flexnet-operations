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
     *
     * @param  bool|null  $entitlementId
     * @param  bool|null  $allowPortalLogin
     * @param  bool|null  $description
     * @param  bool|null  $state
     * @param  bool|null  $soldTo
     * @param  bool|null  $soldToDisplayName
     * @param  bool|null  $shipToEmail
     * @param  bool|null  $shipToAddress
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $product
     * @param  bool|null  $productDescription
     * @param  bool|null  $partNumber
     * @param  bool|null  $partNumberDescription
     * @param  bool|null  $licenseModel
     * @param  bool|null  $licenseTechnology
     * @param  bool|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  bool|null  $term
     * @param  bool|null  $expirationDate
     * @param  bool|null  $versionDate
     * @param  bool|null  $versionDateAttributes
     * @param  bool|null  $numberOfCopies
     * @param  bool|null  $bulkEntitlementType
     * @param  bool|null  $createdUserId
     * @param  bool|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     */
    public function __construct(bool|null $entitlementId = null, bool|null $allowPortalLogin = null, bool|null $description = null, bool|null $state = null, bool|null $soldTo = null, bool|null $soldToDisplayName = null, bool|null $shipToEmail = null, bool|null $shipToAddress = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $product = null, bool|null $productDescription = null, bool|null $partNumber = null, bool|null $partNumberDescription = null, bool|null $licenseModel = null, bool|null $licenseTechnology = null, bool|null $startDateOption = null, bool|null $isPermanent = null, bool|null $term = null, bool|null $expirationDate = null, bool|null $versionDate = null, bool|null $versionDateAttributes = null, bool|null $numberOfCopies = null, bool|null $bulkEntitlementType = null, bool|null $createdUserId = null, bool|null $FNPTimeZoneValue = null, CustomAttributeDescriptorDataType|null $customAttributes = null)
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

    /**
     * @param  bool|null  $entitlementId
     * @param  bool|null  $allowPortalLogin
     * @param  bool|null  $description
     * @param  bool|null  $state
     * @param  bool|null  $soldTo
     * @param  bool|null  $soldToDisplayName
     * @param  bool|null  $shipToEmail
     * @param  bool|null  $shipToAddress
     * @param  bool|null  $orderId
     * @param  bool|null  $orderLineNumber
     * @param  bool|null  $product
     * @param  bool|null  $productDescription
     * @param  bool|null  $partNumber
     * @param  bool|null  $partNumberDescription
     * @param  bool|null  $licenseModel
     * @param  bool|null  $licenseTechnology
     * @param  bool|null  $startDateOption
     * @param  bool|null  $isPermanent
     * @param  bool|null  $term
     * @param  bool|null  $expirationDate
     * @param  bool|null  $versionDate
     * @param  bool|null  $versionDateAttributes
     * @param  bool|null  $numberOfCopies
     * @param  bool|null  $bulkEntitlementType
     * @param  bool|null  $createdUserId
     * @param  bool|null  $FNPTimeZoneValue
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     */
    public static function create(bool|null $entitlementId = null, bool|null $allowPortalLogin = null, bool|null $description = null, bool|null $state = null, bool|null $soldTo = null, bool|null $soldToDisplayName = null, bool|null $shipToEmail = null, bool|null $shipToAddress = null, bool|null $orderId = null, bool|null $orderLineNumber = null, bool|null $product = null, bool|null $productDescription = null, bool|null $partNumber = null, bool|null $partNumberDescription = null, bool|null $licenseModel = null, bool|null $licenseTechnology = null, bool|null $startDateOption = null, bool|null $isPermanent = null, bool|null $term = null, bool|null $expirationDate = null, bool|null $versionDate = null, bool|null $versionDateAttributes = null, bool|null $numberOfCopies = null, bool|null $bulkEntitlementType = null, bool|null $createdUserId = null, bool|null $FNPTimeZoneValue = null, CustomAttributeDescriptorDataType|null $customAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return bool|null
     */
    public function getEntitlementId(): bool|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  bool|null  $entitlementId
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withEntitlementId(bool|null $entitlementId): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    /**
     * @param  bool|null  $allowPortalLogin
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withAllowPortalLogin(bool|null $allowPortalLogin): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getDescription(): bool|null
    {
        return $this->description;
    }

    /**
     * @param  bool|null  $description
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withDescription(bool|null $description): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getState(): bool|null
    {
        return $this->state;
    }

    /**
     * @param  bool|null  $state
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withState(bool|null $state): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSoldTo(): bool|null
    {
        return $this->soldTo;
    }

    /**
     * @param  bool|null  $soldTo
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withSoldTo(bool|null $soldTo): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getSoldToDisplayName(): bool|null
    {
        return $this->soldToDisplayName;
    }

    /**
     * @param  bool|null  $soldToDisplayName
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withSoldToDisplayName(bool|null $soldToDisplayName): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->soldToDisplayName = $soldToDisplayName;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getShipToEmail(): bool|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  bool|null  $shipToEmail
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withShipToEmail(bool|null $shipToEmail): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getShipToAddress(): bool|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  bool|null  $shipToAddress
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withShipToAddress(bool|null $shipToAddress): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderId(): bool|null
    {
        return $this->orderId;
    }

    /**
     * @param  bool|null  $orderId
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withOrderId(bool|null $orderId): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOrderLineNumber(): bool|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  bool|null  $orderLineNumber
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withOrderLineNumber(bool|null $orderLineNumber): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getProduct(): bool|null
    {
        return $this->product;
    }

    /**
     * @param  bool|null  $product
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withProduct(bool|null $product): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getProductDescription(): bool|null
    {
        return $this->productDescription;
    }

    /**
     * @param  bool|null  $productDescription
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withProductDescription(bool|null $productDescription): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->productDescription = $productDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getPartNumber(): bool|null
    {
        return $this->partNumber;
    }

    /**
     * @param  bool|null  $partNumber
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withPartNumber(bool|null $partNumber): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getPartNumberDescription(): bool|null
    {
        return $this->partNumberDescription;
    }

    /**
     * @param  bool|null  $partNumberDescription
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withPartNumberDescription(bool|null $partNumberDescription): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->partNumberDescription = $partNumberDescription;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseModel(): bool|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  bool|null  $licenseModel
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withLicenseModel(bool|null $licenseModel): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getLicenseTechnology(): bool|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  bool|null  $licenseTechnology
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withLicenseTechnology(bool|null $licenseTechnology): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getStartDateOption(): bool|null
    {
        return $this->startDateOption;
    }

    /**
     * @param  bool|null  $startDateOption
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withStartDateOption(bool|null $startDateOption): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->startDateOption = $startDateOption;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    /**
     * @param  bool|null  $isPermanent
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withIsPermanent(bool|null $isPermanent): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getTerm(): bool|null
    {
        return $this->term;
    }

    /**
     * @param  bool|null  $term
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withTerm(bool|null $term): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getExpirationDate(): bool|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  bool|null  $expirationDate
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withExpirationDate(bool|null $expirationDate): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getVersionDate(): bool|null
    {
        return $this->versionDate;
    }

    /**
     * @param  bool|null  $versionDate
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withVersionDate(bool|null $versionDate): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getVersionDateAttributes(): bool|null
    {
        return $this->versionDateAttributes;
    }

    /**
     * @param  bool|null  $versionDateAttributes
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withVersionDateAttributes(bool|null $versionDateAttributes): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->versionDateAttributes = $versionDateAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getNumberOfCopies(): bool|null
    {
        return $this->numberOfCopies;
    }

    /**
     * @param  bool|null  $numberOfCopies
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withNumberOfCopies(bool|null $numberOfCopies): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getBulkEntitlementType(): bool|null
    {
        return $this->bulkEntitlementType;
    }

    /**
     * @param  bool|null  $bulkEntitlementType
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withBulkEntitlementType(bool|null $bulkEntitlementType): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->bulkEntitlementType = $bulkEntitlementType;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getCreatedUserId(): bool|null
    {
        return $this->createdUserId;
    }

    /**
     * @param  bool|null  $createdUserId
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withCreatedUserId(bool|null $createdUserId): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getFNPTimeZoneValue(): bool|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param  bool|null  $FNPTimeZoneValue
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withFNPTimeZoneValue(bool|null $FNPTimeZoneValue): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null
     */
    public function getCustomAttributes(): CustomAttributeDescriptorDataType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorDataType|null  $customAttributes
     * @return BulkEntitlementResponseConfigRequestType
     */
    public function withCustomAttributes(CustomAttributeDescriptorDataType|null $customAttributes): BulkEntitlementResponseConfigRequestType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }
}
