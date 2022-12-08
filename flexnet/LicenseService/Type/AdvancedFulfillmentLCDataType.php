<?php

namespace Flexnet\LicenseService\Type;

class AdvancedFulfillmentLCDataType
{
    /**
     * @var string
     */
    private $fulfillmentId;

    /**
     * @var string|null
     */
    private $childActivationId;

    /**
     * @var int|null
     */
    private $fulfillCount;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $versionDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $versionStartDate;

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
     * @var \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    private $serverHost;

    /**
     * @var string|null
     */
    private $nodeLockHost;

    /**
     * @var \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    private $countedNodeLockHostIds;

    /**
     * @var \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    private $customHost;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $licenseModelAttributes;

    /**
     * @var bool|null
     */
    private $overridePolicy;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * Constructor
     *
     * @param string $fulfillmentId
     * @param string|null $childActivationId
     * @param int|null $fulfillCount
     * @param \DateTimeInterface|null $startDate
     * @param \DateTimeInterface|null $versionDate
     * @param \DateTimeInterface|null $versionStartDate
     * @param string|null $soldTo
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost
     * @param string|null $nodeLockHost
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param bool|null $overridePolicy
     * @param string|null $FNPTimeZoneValue
     */
    public function __construct(string $fulfillmentId, string|null $childActivationId = null, int|null $fulfillCount = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $versionDate = null, \DateTimeInterface|null $versionStartDate = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost = null, string|null $nodeLockHost = null, \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $FNPTimeZoneValue = null)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->childActivationId = $childActivationId;
        $this->fulfillCount = $fulfillCount;
        $this->startDate = $startDate;
        $this->versionDate = $versionDate;
        $this->versionStartDate = $versionStartDate;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverHost = $serverHost;
        $this->nodeLockHost = $nodeLockHost;
        $this->countedNodeLockHostIds = $countedNodeLockHostIds;
        $this->customHost = $customHost;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * @param string $fulfillmentId
     * @param string|null $childActivationId
     * @param int|null $fulfillCount
     * @param \DateTimeInterface|null $startDate
     * @param \DateTimeInterface|null $versionDate
     * @param \DateTimeInterface|null $versionStartDate
     * @param string|null $soldTo
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost
     * @param string|null $nodeLockHost
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param bool|null $overridePolicy
     * @param string|null $FNPTimeZoneValue
     */
    public static function create(string $fulfillmentId, string|null $childActivationId = null, int|null $fulfillCount = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $versionDate = null, \DateTimeInterface|null $versionStartDate = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost = null, string|null $nodeLockHost = null, \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId() : string
    {
        return $this->fulfillmentId;
    }

    /**
     * @param string $fulfillmentId
     * @return AdvancedFulfillmentLCDataType
     */
    public function withFulfillmentId(string $fulfillmentId) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getChildActivationId() : string|null
    {
        return $this->childActivationId;
    }

    /**
     * @param string|null $childActivationId
     * @return AdvancedFulfillmentLCDataType
     */
    public function withChildActivationId(string|null $childActivationId) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->childActivationId = $childActivationId;

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
     * @return AdvancedFulfillmentLCDataType
     */
    public function withFulfillCount(int|null $fulfillCount) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartDate() : \DateTimeInterface|null
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface|null $startDate
     * @return AdvancedFulfillmentLCDataType
     */
    public function withStartDate(\DateTimeInterface|null $startDate) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getVersionDate() : \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    /**
     * @param \DateTimeInterface|null $versionDate
     * @return AdvancedFulfillmentLCDataType
     */
    public function withVersionDate(\DateTimeInterface|null $versionDate) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getVersionStartDate() : \DateTimeInterface|null
    {
        return $this->versionStartDate;
    }

    /**
     * @param \DateTimeInterface|null $versionStartDate
     * @return AdvancedFulfillmentLCDataType
     */
    public function withVersionStartDate(\DateTimeInterface|null $versionStartDate) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->versionStartDate = $versionStartDate;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldTo() : string|null
    {
        return $this->soldTo;
    }

    /**
     * @param string|null $soldTo
     * @return AdvancedFulfillmentLCDataType
     */
    public function withSoldTo(string|null $soldTo) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

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
     * @return AdvancedFulfillmentLCDataType
     */
    public function withShipToEmail(string|null $shipToEmail) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
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
     * @return AdvancedFulfillmentLCDataType
     */
    public function withShipToAddress(string|null $shipToAddress) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerHost() : \Flexnet\LicenseService\Type\ServerIDsType|null
    {
        return $this->serverHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost
     * @return AdvancedFulfillmentLCDataType
     */
    public function withServerHost(\Flexnet\LicenseService\Type\ServerIDsType|null $serverHost) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->serverHost = $serverHost;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getNodeLockHost() : string|null
    {
        return $this->nodeLockHost;
    }

    /**
     * @param string|null $nodeLockHost
     * @return AdvancedFulfillmentLCDataType
     */
    public function withNodeLockHost(string|null $nodeLockHost) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->nodeLockHost = $nodeLockHost;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getCountedNodeLockHostIds() : \Flexnet\LicenseService\Type\NodeIDsType|null
    {
        return $this->countedNodeLockHostIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds
     * @return AdvancedFulfillmentLCDataType
     */
    public function withCountedNodeLockHostIds(\Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->countedNodeLockHostIds = $countedNodeLockHostIds;

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
     * @return AdvancedFulfillmentLCDataType
     */
    public function withCustomHost(\Flexnet\LicenseService\Type\CustomHostIDType|null $customHost) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

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
     * @return AdvancedFulfillmentLCDataType
     */
    public function withLicenseModelAttributes(\Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

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
     * @return AdvancedFulfillmentLCDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

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
     * @return AdvancedFulfillmentLCDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}

