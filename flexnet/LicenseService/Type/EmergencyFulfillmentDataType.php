<?php

namespace Flexnet\LicenseService\Type;

class EmergencyFulfillmentDataType
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
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

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
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, string|null $shipToEmail = null, string|null $shipToAddress = null, ServerIDsType|null $serverIds = null, NodeIDsType|null $nodeIds = null, CustomHostIDType|null $customHost = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  string|null  $FNPTimeZoneValue
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     */
    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, string|null $shipToEmail = null, string|null $shipToAddress = null, ServerIDsType|null $serverIds = null, NodeIDsType|null $nodeIds = null, CustomHostIDType|null $customHost = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     */
    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getLicenseModelAttributes(): AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface $startDate): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getEndDate(): \DateTimeInterface
    {
        return $this->endDate;
    }

    public function withEndDate(\DateTimeInterface $endDate): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerIds(): ServerIDsType|null
    {
        return $this->serverIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     */
    public function withServerIds(ServerIDsType|null $serverIds): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getNodeIds(): NodeIDsType|null
    {
        return $this->nodeIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     */
    public function withNodeIds(NodeIDsType|null $nodeIds): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost(): CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     */
    public function withCustomHost(CustomHostIDType|null $customHost): EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }
}
