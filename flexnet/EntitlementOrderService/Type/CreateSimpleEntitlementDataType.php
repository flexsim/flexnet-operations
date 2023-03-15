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
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @param  string|null  $description
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $emailTemplateVariation
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public function __construct(IdType $entitlementId, string|null $description = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $emailTemplateVariation = null, CreateEntitlementLineItemDataType|array|null $lineItems = null, CreateMaintenanceLineItemDataType|array|null $maintenanceLineItems = null, bool|null $autoDeploy = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
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
     * @param  \Flexnet\EntitlementOrderService\Type\IdType  $entitlementId
     * @param  string|null  $description
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $emailTemplateVariation
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public static function create(IdType $entitlementId, string|null $description = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $emailTemplateVariation = null, CreateEntitlementLineItemDataType|array|null $lineItems = null, CreateMaintenanceLineItemDataType|array|null $maintenanceLineItems = null, bool|null $autoDeploy = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
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
     */
    public function withEntitlementId(IdType $entitlementId): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(string|null $soldTo): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): string|null
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(string|null $emailTemplateVariation): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null
     */
    public function getLineItems(): CreateEntitlementLineItemDataType|array|null
    {
        return $this->lineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateEntitlementLineItemDataType>|null  $lineItems
     */
    public function withLineItems(CreateEntitlementLineItemDataType|array|null $lineItems): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItems = $lineItems;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null
     */
    public function getMaintenanceLineItems(): CreateMaintenanceLineItemDataType|array|null
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\CreateMaintenanceLineItemDataType>|null  $maintenanceLineItems
     */
    public function withMaintenanceLineItems(CreateMaintenanceLineItemDataType|array|null $maintenanceLineItems): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItems = $maintenanceLineItems;

        return $new;
    }

    public function getAutoDeploy(): bool|null
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(bool|null $autoDeploy): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->autoDeploy = $autoDeploy;

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
     */
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): CreateSimpleEntitlementDataType
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
     */
    public function withEntitlementAttributes(AttributeDescriptorDataType|null $entitlementAttributes): CreateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
