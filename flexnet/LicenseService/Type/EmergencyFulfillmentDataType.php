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
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param string|null $FNPTimeZoneValue
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param string|null $FNPTimeZoneValue
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return EmergencyFulfillmentDataType
     */
    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getLicenseModelAttributes() : \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @return EmergencyFulfillmentDataType
     */
    public function withLicenseModelAttributes(\Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFNPTimeZoneValue() : string|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string|null $FNPTimeZoneValue
     * @return EmergencyFulfillmentDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate() : \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return EmergencyFulfillmentDataType
     */
    public function withStartDate(\DateTimeInterface $startDate) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate() : \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return EmergencyFulfillmentDataType
     */
    public function withEndDate(\DateTimeInterface $endDate) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail() : string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param string|null $shipToEmail
     * @return EmergencyFulfillmentDataType
     */
    public function withShipToEmail(string|null $shipToEmail) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress() : string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param string|null $shipToAddress
     * @return EmergencyFulfillmentDataType
     */
    public function withShipToAddress(string|null $shipToAddress) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerIds() : \Flexnet\LicenseService\Type\ServerIDsType|null
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @return EmergencyFulfillmentDataType
     */
    public function withServerIds(\Flexnet\LicenseService\Type\ServerIDsType|null $serverIds) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getNodeIds() : \Flexnet\LicenseService\Type\NodeIDsType|null
    {
        return $this->nodeIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @return EmergencyFulfillmentDataType
     */
    public function withNodeIds(\Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost() : \Flexnet\LicenseService\Type\CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @return EmergencyFulfillmentDataType
     */
    public function withCustomHost(\Flexnet\LicenseService\Type\CustomHostIDType|null $customHost) : \Flexnet\LicenseService\Type\EmergencyFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }
}

