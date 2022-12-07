<?php

namespace Flexnet\EntitlementOrderService\Type;

class SimpleEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType
     */
    private $entitlementId;

    /**
     * @var \DateTimeInterface|null
     */
    private $lastModifiedDateTime;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var string|null
     */
    private $soldToName;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var string|null
     */
    private $emailTemplateVariation;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $createdUserId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null
     */
    private $lineItems;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null
     */
    private $maintenanceLineItems;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null
     */
    private $channelPartners;

    /**
     * @var bool|null
     */
    private $allowPortalLogin;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    private $entitlementAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  string|null  $description
     * @param  string  $soldTo
     * @param  string|null  $soldToName
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $emailTemplateVariation
     * @param  string|null  $state
     * @param  string|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null  $maintenanceLineItems
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public function __construct(IdType $entitlementId, \DateTimeInterface|null $lastModifiedDateTime = null, string|null $description = null, string $soldTo, string|null $soldToName = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $emailTemplateVariation = null, string|null $state = null, string|null $createdUserId = null, EntitlementLineItemDataType|array|null $lineItems = null, MaintenanceLineItemDataType|array|null $maintenanceLineItems = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->description = $description;
        $this->soldTo = $soldTo;
        $this->soldToName = $soldToName;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->emailTemplateVariation = $emailTemplateVariation;
        $this->state = $state;
        $this->createdUserId = $createdUserId;
        $this->lineItems = $lineItems;
        $this->maintenanceLineItems = $maintenanceLineItems;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->entitlementAttributes = $entitlementAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @param  string|null  $description
     * @param  string  $soldTo
     * @param  string|null  $soldToName
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $emailTemplateVariation
     * @param  string|null  $state
     * @param  string|null  $createdUserId
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null  $maintenanceLineItems
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public static function create(IdType $entitlementId, \DateTimeInterface|null $lastModifiedDateTime = null, string|null $description = null, string $soldTo, string|null $soldToName = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $emailTemplateVariation = null, string|null $state = null, string|null $createdUserId = null, EntitlementLineItemDataType|array|null $lineItems = null, MaintenanceLineItemDataType|array|null $maintenanceLineItems = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\IdType
     */
    public function getEntitlementId(): IdType
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @return SimpleEntitlementDataType
     */
    public function withEntitlementId(IdType $entitlementId): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLastModifiedDateTime(): \DateTimeInterface|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  \DateTimeInterface|null  $lastModifiedDateTime
     * @return SimpleEntitlementDataType
     */
    public function withLastModifiedDateTime(\DateTimeInterface|null $lastModifiedDateTime): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->description;
    }

    /**
     * @param  string|null  $description
     * @return SimpleEntitlementDataType
     */
    public function withDescription(string|null $description): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return SimpleEntitlementDataType
     */
    public function withSoldTo(string $soldTo): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldToName(): string|null
    {
        return $this->soldToName;
    }

    /**
     * @param  string|null  $soldToName
     * @return SimpleEntitlementDataType
     */
    public function withSoldToName(string|null $soldToName): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldToName = $soldToName;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  string|null  $shipToEmail
     * @return SimpleEntitlementDataType
     */
    public function withShipToEmail(string|null $shipToEmail): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  string|null  $shipToAddress
     * @return SimpleEntitlementDataType
     */
    public function withShipToAddress(string|null $shipToAddress): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getEmailTemplateVariation(): string|null
    {
        return $this->emailTemplateVariation;
    }

    /**
     * @param  string|null  $emailTemplateVariation
     * @return SimpleEntitlementDataType
     */
    public function withEmailTemplateVariation(string|null $emailTemplateVariation): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

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
     * @return SimpleEntitlementDataType
     */
    public function withState(string|null $state): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getCreatedUserId(): string|null
    {
        return $this->createdUserId;
    }

    /**
     * @param  string|null  $createdUserId
     * @return SimpleEntitlementDataType
     */
    public function withCreatedUserId(string|null $createdUserId): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null
     */
    public function getLineItems(): EntitlementLineItemDataType|array|null
    {
        return $this->lineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null  $lineItems
     * @return SimpleEntitlementDataType
     */
    public function withLineItems(EntitlementLineItemDataType|array|null $lineItems): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItems = $lineItems;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null
     */
    public function getMaintenanceLineItems(): MaintenanceLineItemDataType|array|null
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null  $maintenanceLineItems
     * @return SimpleEntitlementDataType
     */
    public function withMaintenanceLineItems(MaintenanceLineItemDataType|array|null $maintenanceLineItems): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null
     */
    public function getChannelPartners(): ChannelPartnerDataListType|null
    {
        return $this->channelPartners;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @return SimpleEntitlementDataType
     */
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

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
     * @return SimpleEntitlementDataType
     */
    public function withAllowPortalLogin(bool|null $allowPortalLogin): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null
     */
    public function getEntitlementAttributes(): AttributeDescriptorDataType|null
    {
        return $this->entitlementAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     * @return SimpleEntitlementDataType
     */
    public function withEntitlementAttributes(AttributeDescriptorDataType|null $entitlementAttributes): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
