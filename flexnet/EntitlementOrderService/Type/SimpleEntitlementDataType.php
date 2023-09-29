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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public function __construct(IdType $entitlementId, string $soldTo, \DateTimeInterface $lastModifiedDateTime = null, string $description = null, string $soldToName = null, string $shipToEmail = null, string $shipToAddress = null, string $emailTemplateVariation = null, string $state = null, string $createdUserId = null, EntitlementLineItemDataType|array $lineItems = null, MaintenanceLineItemDataType|array $maintenanceLineItems = null, ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null, AttributeDescriptorDataType $entitlementAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->description = $description;
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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public static function create(IdType $entitlementId, string $soldTo, \DateTimeInterface $lastModifiedDateTime = null, string $description = null, string $soldToName = null, string $shipToEmail = null, string $shipToAddress = null, string $emailTemplateVariation = null, string $state = null, string $createdUserId = null, EntitlementLineItemDataType|array $lineItems = null, MaintenanceLineItemDataType|array $maintenanceLineItems = null, ChannelPartnerDataListType $channelPartners = null, bool $allowPortalLogin = null, AttributeDescriptorDataType $entitlementAttributes = null)
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

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): SimpleEntitlementDataType
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

    public function getSoldToName(): ?string
    {
        return $this->soldToName;
    }

    public function withSoldToName(?string $soldToName): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldToName = $soldToName;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): ?string
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(?string $emailTemplateVariation): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?string $createdUserId): SimpleEntitlementDataType
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
     */
    public function withMaintenanceLineItems(MaintenanceLineItemDataType|array|null $maintenanceLineItems): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getChannelPartners(): ?ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?ChannelPartnerDataListType $channelPartners): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getEntitlementAttributes(): ?AttributeDescriptorDataType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?AttributeDescriptorDataType $entitlementAttributes): SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
