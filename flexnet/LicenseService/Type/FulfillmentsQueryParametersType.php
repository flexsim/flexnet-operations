<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentsQueryParametersType
{
    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $activationId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $fulfillmentId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $product;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $hostId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $nodeLockHostId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $soldTo;

    /**
     * @var \Flexnet\LicenseService\Type\DateQueryType|null
     */
    private $fulfillDate;

    /**
     * @var \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    private $fulfillDateTime;

    /**
     * @var \Flexnet\LicenseService\Type\DateQueryType|null
     */
    private $startDate;

    /**
     * @var \Flexnet\LicenseService\Type\DateQueryType|null
     */
    private $expirationDate;

    /**
     * @var \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexnet\LicenseService\Type\StateQueryType|null
     */
    private $state;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $licenseTechnology;

    /**
     * @var string|null
     */
    private $userId;

    /**
     * @var string|null
     */
    private $fulfillmentSource;

    /**
     * @var \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
     */
    private $customAttributes;

    /**
     * @var \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
     */
    private $customHostAttributes;

    /**
     * @var string|null
     */
    private $activationType;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $product
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $hostId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $nodeLockHostId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $fulfillDate
     * @param \Flexnet\LicenseService\Type\DateTimeQueryType|null $fulfillDateTime
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $startDate
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $expirationDate
     * @param \Flexnet\LicenseService\Type\DateTimeQueryType|null $lastModifiedDateTime
     * @param \Flexnet\LicenseService\Type\StateQueryType|null $state
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $licenseTechnology
     * @param string|null $userId
     * @param string|null $fulfillmentSource
     * @param \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customAttributes
     * @param \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customHostAttributes
     * @param string|null $activationType
     */
    public function __construct(\Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $product = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $hostId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $nodeLockHostId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo = null, \Flexnet\LicenseService\Type\DateQueryType|null $fulfillDate = null, \Flexnet\LicenseService\Type\DateTimeQueryType|null $fulfillDateTime = null, \Flexnet\LicenseService\Type\DateQueryType|null $startDate = null, \Flexnet\LicenseService\Type\DateQueryType|null $expirationDate = null, \Flexnet\LicenseService\Type\DateTimeQueryType|null $lastModifiedDateTime = null, \Flexnet\LicenseService\Type\StateQueryType|null $state = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $licenseTechnology = null, string|null $userId = null, string|null $fulfillmentSource = null, \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customAttributes = null, \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customHostAttributes = null, string|null $activationType = null)
    {
        $this->entitlementId = $entitlementId;
        $this->activationId = $activationId;
        $this->fulfillmentId = $fulfillmentId;
        $this->product = $product;
        $this->hostId = $hostId;
        $this->nodeLockHostId = $nodeLockHostId;
        $this->soldTo = $soldTo;
        $this->fulfillDate = $fulfillDate;
        $this->fulfillDateTime = $fulfillDateTime;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->userId = $userId;
        $this->fulfillmentSource = $fulfillmentSource;
        $this->customAttributes = $customAttributes;
        $this->customHostAttributes = $customHostAttributes;
        $this->activationType = $activationType;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $product
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $hostId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $nodeLockHostId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $fulfillDate
     * @param \Flexnet\LicenseService\Type\DateTimeQueryType|null $fulfillDateTime
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $startDate
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $expirationDate
     * @param \Flexnet\LicenseService\Type\DateTimeQueryType|null $lastModifiedDateTime
     * @param \Flexnet\LicenseService\Type\StateQueryType|null $state
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $licenseTechnology
     * @param string|null $userId
     * @param string|null $fulfillmentSource
     * @param \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customAttributes
     * @param \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customHostAttributes
     * @param string|null $activationType
     */
    public static function create(\Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $product = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $hostId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $nodeLockHostId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo = null, \Flexnet\LicenseService\Type\DateQueryType|null $fulfillDate = null, \Flexnet\LicenseService\Type\DateTimeQueryType|null $fulfillDateTime = null, \Flexnet\LicenseService\Type\DateQueryType|null $startDate = null, \Flexnet\LicenseService\Type\DateQueryType|null $expirationDate = null, \Flexnet\LicenseService\Type\DateTimeQueryType|null $lastModifiedDateTime = null, \Flexnet\LicenseService\Type\StateQueryType|null $state = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $licenseTechnology = null, string|null $userId = null, string|null $fulfillmentSource = null, \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customAttributes = null, \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customHostAttributes = null, string|null $activationType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getEntitlementId() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId
     * @return FulfillmentsQueryParametersType
     */
    public function withEntitlementId(\Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getActivationId() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->activationId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId
     * @return FulfillmentsQueryParametersType
     */
    public function withActivationId(\Flexnet\LicenseService\Type\SimpleQueryType|null $activationId) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getFulfillmentId() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->fulfillmentId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId
     * @return FulfillmentsQueryParametersType
     */
    public function withFulfillmentId(\Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getProduct() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->product;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $product
     * @return FulfillmentsQueryParametersType
     */
    public function withProduct(\Flexnet\LicenseService\Type\SimpleQueryType|null $product) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getHostId() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->hostId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $hostId
     * @return FulfillmentsQueryParametersType
     */
    public function withHostId(\Flexnet\LicenseService\Type\SimpleQueryType|null $hostId) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->hostId = $hostId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getNodeLockHostId() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->nodeLockHostId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $nodeLockHostId
     * @return FulfillmentsQueryParametersType
     */
    public function withNodeLockHostId(\Flexnet\LicenseService\Type\SimpleQueryType|null $nodeLockHostId) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->nodeLockHostId = $nodeLockHostId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getSoldTo() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo
     * @return FulfillmentsQueryParametersType
     */
    public function withSoldTo(\Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getFulfillDate() : \Flexnet\LicenseService\Type\DateQueryType|null
    {
        return $this->fulfillDate;
    }

    /**
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $fulfillDate
     * @return FulfillmentsQueryParametersType
     */
    public function withFulfillDate(\Flexnet\LicenseService\Type\DateQueryType|null $fulfillDate) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    public function getFulfillDateTime() : \Flexnet\LicenseService\Type\DateTimeQueryType|null
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param \Flexnet\LicenseService\Type\DateTimeQueryType|null $fulfillDateTime
     * @return FulfillmentsQueryParametersType
     */
    public function withFulfillDateTime(\Flexnet\LicenseService\Type\DateTimeQueryType|null $fulfillDateTime) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getStartDate() : \Flexnet\LicenseService\Type\DateQueryType|null
    {
        return $this->startDate;
    }

    /**
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $startDate
     * @return FulfillmentsQueryParametersType
     */
    public function withStartDate(\Flexnet\LicenseService\Type\DateQueryType|null $startDate) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getExpirationDate() : \Flexnet\LicenseService\Type\DateQueryType|null
    {
        return $this->expirationDate;
    }

    /**
     * @param \Flexnet\LicenseService\Type\DateQueryType|null $expirationDate
     * @return FulfillmentsQueryParametersType
     */
    public function withExpirationDate(\Flexnet\LicenseService\Type\DateQueryType|null $expirationDate) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    public function getLastModifiedDateTime() : \Flexnet\LicenseService\Type\DateTimeQueryType|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \Flexnet\LicenseService\Type\DateTimeQueryType|null $lastModifiedDateTime
     * @return FulfillmentsQueryParametersType
     */
    public function withLastModifiedDateTime(\Flexnet\LicenseService\Type\DateTimeQueryType|null $lastModifiedDateTime) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\StateQueryType|null
     */
    public function getState() : \Flexnet\LicenseService\Type\StateQueryType|null
    {
        return $this->state;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StateQueryType|null $state
     * @return FulfillmentsQueryParametersType
     */
    public function withState(\Flexnet\LicenseService\Type\StateQueryType|null $state) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getLicenseTechnology() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $licenseTechnology
     * @return FulfillmentsQueryParametersType
     */
    public function withLicenseTechnology(\Flexnet\LicenseService\Type\SimpleQueryType|null $licenseTechnology) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getUserId() : string|null
    {
        return $this->userId;
    }

    /**
     * @param string|null $userId
     * @return FulfillmentsQueryParametersType
     */
    public function withUserId(string|null $userId) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFulfillmentSource() : string|null
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param string|null $fulfillmentSource
     * @return FulfillmentsQueryParametersType
     */
    public function withFulfillmentSource(string|null $fulfillmentSource) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
     */
    public function getCustomAttributes() : \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customAttributes
     * @return FulfillmentsQueryParametersType
     */
    public function withCustomAttributes(\Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customAttributes) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
     */
    public function getCustomHostAttributes() : \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
    {
        return $this->customHostAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customHostAttributes
     * @return FulfillmentsQueryParametersType
     */
    public function withCustomHostAttributes(\Flexnet\LicenseService\Type\CustomAttributesQueryListType|null $customHostAttributes) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getActivationType() : string|null
    {
        return $this->activationType;
    }

    /**
     * @param string|null $activationType
     * @return FulfillmentsQueryParametersType
     */
    public function withActivationType(string|null $activationType) : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}

