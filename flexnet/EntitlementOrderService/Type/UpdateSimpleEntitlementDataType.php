<?php

namespace Flexnet\EntitlementOrderService\Type;

class UpdateSimpleEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdType|null
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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $entitlementId
     * @param  string|null  $description
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $emailTemplateVariation
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, IdType|null $entitlementId = null, string|null $description = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $emailTemplateVariation = null, bool|null $autoDeploy = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->entitlementId = $entitlementId;
        $this->description = $description;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->emailTemplateVariation = $emailTemplateVariation;
        $this->autoDeploy = $autoDeploy;
        $this->channelPartners = $channelPartners;
        $this->allowPortalLogin = $allowPortalLogin;
        $this->entitlementAttributes = $entitlementAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $entitlementId
     * @param  string|null  $description
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  string|null  $emailTemplateVariation
     * @param  bool|null  $autoDeploy
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType|null  $channelPartners
     * @param  bool|null  $allowPortalLogin
     * @param  \Flexnet\EntitlementOrderService\Type\AttributeDescriptorDataType|null  $entitlementAttributes
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, IdType|null $entitlementId = null, string|null $description = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, string|null $emailTemplateVariation = null, bool|null $autoDeploy = null, ChannelPartnerDataListType|null $channelPartners = null, bool|null $allowPortalLogin = null, AttributeDescriptorDataType|null $entitlementAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     */
    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\IdType|null
     */
    public function getEntitlementId(): IdType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\IdType|null  $entitlementId
     */
    public function withEntitlementId(IdType|null $entitlementId): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(string|null $soldTo): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getEmailTemplateVariation(): string|null
    {
        return $this->emailTemplateVariation;
    }

    public function withEmailTemplateVariation(string|null $emailTemplateVariation): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->emailTemplateVariation = $emailTemplateVariation;

        return $new;
    }

    public function getAutoDeploy(): bool|null
    {
        return $this->autoDeploy;
    }

    public function withAutoDeploy(bool|null $autoDeploy): UpdateSimpleEntitlementDataType
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
    public function withChannelPartners(ChannelPartnerDataListType|null $channelPartners): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->channelPartners = $channelPartners;

        return $new;
    }

    public function getAllowPortalLogin(): bool|null
    {
        return $this->allowPortalLogin;
    }

    public function withAllowPortalLogin(bool|null $allowPortalLogin): UpdateSimpleEntitlementDataType
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
    public function withEntitlementAttributes(AttributeDescriptorDataType|null $entitlementAttributes): UpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementAttributes = $entitlementAttributes;

        return $new;
    }
}
