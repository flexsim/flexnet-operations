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

    public function getEntitlementId(): IdType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(IdType $entitlementId): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getLastModifiedDateTime(): \DateTimeInterface|null
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(\DateTimeInterface|null $lastModifiedDateTime): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToName(): string|null
    {
        return $this->soldToName;
    }

    public function withSoldToName(string|null $soldToName): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldToName = $soldToName;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): string|null
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(string|null $emailTemplateVariation): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    public function getState(): string|null
    {
        return $this->state;
    }

    public function withState(string|null $state): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreatedUserId(): string|null
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(string|null $createdUserId): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    public function getLineItems(): EntitlementLineItemDataType|array|null
    {
        return $this->lineItems;
    }

    public function withLineItems(EntitlementLineItemDataType|array|null $lineItems): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItems = $lineItems;

        return $new;
    }

    public function getMaintenanceLineItems(): MaintenanceLineItemDataType|array|null
    {
        return $this->maintenanceLineItems;
    }

    public function withMaintenanceLineItems(MaintenanceLineItemDataType|array|null $maintenanceLineItems): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getChannelPartners(): ChannelPartnerDataListType|null
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getEntitlementAttributes(): AttributeDescriptorDataType|null
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(AttributeDescriptorDataType|null $entitlementAttributes): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
