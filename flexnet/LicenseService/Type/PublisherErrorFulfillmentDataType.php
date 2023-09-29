<?php

namespace Flexnet\LicenseService\Type;

class PublisherErrorFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $licenseModelAttributes;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    private $serverIds;

    /**
     * @var \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    private $nodeIds;

    /**
     * @var \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    private $customHost;

    /**
     * @var int|null
     */
    private $fulfillCount;

    /**
     * @var bool|null
     */
    private $overridePolicy;

    /**
     * Constructor
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, string $shipToEmail = null, string $shipToAddress = null, ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null, int $fulfillCount = null, bool $overridePolicy = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
        $this->fulfillCount = $fulfillCount;
        $this->overridePolicy = $overridePolicy;
    }

    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, AttributeDescriptorDataType $licenseModelAttributes = null, string $FNPTimeZoneValue = null, string $shipToEmail = null, string $shipToAddress = null, ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null, int $fulfillCount = null, bool $overridePolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getLicenseModelAttributes(): ?AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?AttributeDescriptorDataType $licenseModelAttributes): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getServerIds(): ?ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?ServerIDsType $serverIds): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeIds(): ?NodeIDsType
    {
        return $this->nodeIds;
    }

    public function withNodeIds(?NodeIDsType $nodeIds): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    public function getCustomHost(): ?CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?CustomHostIDType $customHost): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    public function getFulfillCount(): ?int
    {
        return $this->fulfillCount;
    }

    public function withFulfillCount(?int $fulfillCount): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }
}
