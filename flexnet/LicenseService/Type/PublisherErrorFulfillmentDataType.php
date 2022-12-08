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
     *
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param string|null $FNPTimeZoneValue
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param int|null $fulfillCount
     * @param bool|null $overridePolicy
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, int|null $fulfillCount = null, bool|null $overridePolicy = null)
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

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param string|null $FNPTimeZoneValue
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param int|null $fulfillCount
     * @param bool|null $overridePolicy
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, string|null $FNPTimeZoneValue = null, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, int|null $fulfillCount = null, bool|null $overridePolicy = null)
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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withLicenseModelAttributes(\Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withShipToEmail(string|null $shipToEmail) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withShipToAddress(string|null $shipToAddress) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withServerIds(\Flexnet\LicenseService\Type\ServerIDsType|null $serverIds) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withNodeIds(\Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
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
     * @return PublisherErrorFulfillmentDataType
     */
    public function withCustomHost(\Flexnet\LicenseService\Type\CustomHostIDType|null $customHost) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getFulfillCount() : int|null
    {
        return $this->fulfillCount;
    }

    /**
     * @param int|null $fulfillCount
     * @return PublisherErrorFulfillmentDataType
     */
    public function withFulfillCount(int|null $fulfillCount) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOverridePolicy() : bool|null
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool|null $overridePolicy
     * @return PublisherErrorFulfillmentDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }
}

