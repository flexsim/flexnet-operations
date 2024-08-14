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
    public function __construct(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId, string $soldTo, ?\DateTimeInterface $lastModifiedDateTime = null, ?string $description = null, ?string $soldToName = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $emailTemplateVariation = null, ?string $state = null, ?string $createdUserId = null, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array|null $lineItems = null, \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array|null $maintenanceLineItems = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes = null)
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
    public static function create(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId, string $soldTo, ?\DateTimeInterface $lastModifiedDateTime = null, ?string $description = null, ?string $soldToName = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $emailTemplateVariation = null, ?string $state = null, ?string $createdUserId = null, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array|null $lineItems = null, \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array|null $maintenanceLineItems = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): \Flexnet\EntitlementOrderService\Type\IdType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getSoldToName(): ?string
    {
        return $this->soldToName;
    }

    public function withSoldToName(?string $soldToName): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldToName = $soldToName;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): ?string
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(?string $emailTemplateVariation): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function withState(?string $state): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }

    public function withCreatedUserId(?string $createdUserId): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->createdUserId = $createdUserId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null
     */
    public function getLineItems(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array|null
    {
        return $this->lineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType>|null  $lineItems
     */
    public function withLineItems(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemDataType|array|null $lineItems): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItems = $lineItems;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null
     */
    public function getMaintenanceLineItems(): \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array|null
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public function withMaintenanceLineItems(\Flexnet\EntitlementOrderService\Type\MaintenanceLineItemDataType|array|null $maintenanceLineItems): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getChannelPartners(): ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getEntitlementAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes): \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
