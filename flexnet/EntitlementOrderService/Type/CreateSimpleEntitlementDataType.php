<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreateSimpleEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType
     */
    private $entitlementId;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $soldTo;

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
     * @var \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null
     */
    private $lineItems;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null
     */
    private $maintenanceLineItems;

    /**
     * @var bool|null
     */
    private $autoDeploy;

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
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId, ?string $description = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $emailTemplateVariation = null, \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array|null $lineItems = null, \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array|null $maintenanceLineItems = null, ?bool $autoDeploy = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->description = $description;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->emailTemplateVariation = $emailTemplateVariation;
        $this->lineItems = $lineItems;
        $this->maintenanceLineItems = $maintenanceLineItems;
        $this->autoDeploy = $autoDeploy;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->entitlementAttributes = $entitlementAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId, ?string $description = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?string $emailTemplateVariation = null, \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array|null $lineItems = null, \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array|null $maintenanceLineItems = null, ?bool $autoDeploy = null, ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners = null, ?bool $allowPortalLogin = null, ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): \Flexnet\EntitlementOrderService\Type\IdType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(\Flexnet\EntitlementOrderService\Type\IdType $entitlementId): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): ?string
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(?string $emailTemplateVariation): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null
     */
    public function getLineItems(): \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array|null
    {
        return $this->lineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     */
    public function withLineItems(\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array|null $lineItems): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItems = $lineItems;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null
     */
    public function getMaintenanceLineItems(): \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array|null
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public function withMaintenanceLineItems(\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array|null $maintenanceLineItems): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getAutoDeploy(): ?bool
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(?bool $autoDeploy): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

        return $new;
    }

    public function getChannelPartners(): ?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType
    {
        return $this->channelPartners;
    }

    public function withChannelPartners(?\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType $channelPartners): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): ?bool
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(?bool $allowPortalLogin): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->allowPortalLogin = $allowPortalLogin;

        return $new;
    }

    public function getEntitlementAttributes(): ?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType
    {
        return $this->entitlementAttributes;
    }

    public function withEntitlementAttributes(?\Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType $entitlementAttributes): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
