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
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $activationId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $fulfillmentId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $product
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $hostId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $nodeLockHostId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $fulfillDate
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $fulfillDateTime
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $startDate
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     * @param  \Flexnet\LicenseService\Type\StateQueryType|null  $state
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  string|null  $userId
     * @param  string|null  $fulfillmentSource
     * @param  \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null  $customAttributes
     * @param  \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null  $customHostAttributes
     * @param  string|null  $activationType
     */
    public function __construct(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $activationId = null, SimpleQueryType|null $fulfillmentId = null, SimpleQueryType|null $product = null, SimpleQueryType|null $hostId = null, SimpleQueryType|null $nodeLockHostId = null, SimpleQueryType|null $soldTo = null, DateQueryType|null $fulfillDate = null, DateTimeQueryType|null $fulfillDateTime = null, DateQueryType|null $startDate = null, DateQueryType|null $expirationDate = null, DateTimeQueryType|null $lastModifiedDateTime = null, StateQueryType|null $state = null, SimpleQueryType|null $licenseTechnology = null, string|null $userId = null, string|null $fulfillmentSource = null, CustomAttributesQueryListType|null $customAttributes = null, CustomAttributesQueryListType|null $customHostAttributes = null, string|null $activationType = null)
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
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $activationId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $fulfillmentId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $product
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $hostId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $nodeLockHostId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $soldTo
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $fulfillDate
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $fulfillDateTime
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $startDate
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     * @param  \Flexnet\LicenseService\Type\StateQueryType|null  $state
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $licenseTechnology
     * @param  string|null  $userId
     * @param  string|null  $fulfillmentSource
     * @param  \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null  $customAttributes
     * @param  \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null  $customHostAttributes
     * @param  string|null  $activationType
     */
    public static function create(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $activationId = null, SimpleQueryType|null $fulfillmentId = null, SimpleQueryType|null $product = null, SimpleQueryType|null $hostId = null, SimpleQueryType|null $nodeLockHostId = null, SimpleQueryType|null $soldTo = null, DateQueryType|null $fulfillDate = null, DateTimeQueryType|null $fulfillDateTime = null, DateQueryType|null $startDate = null, DateQueryType|null $expirationDate = null, DateTimeQueryType|null $lastModifiedDateTime = null, StateQueryType|null $state = null, SimpleQueryType|null $licenseTechnology = null, string|null $userId = null, string|null $fulfillmentSource = null, CustomAttributesQueryListType|null $customAttributes = null, CustomAttributesQueryListType|null $customHostAttributes = null, string|null $activationType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getEntitlementId(): SimpleQueryType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $entitlementId
     */
    public function withEntitlementId(SimpleQueryType|null $entitlementId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getActivationId(): SimpleQueryType|null
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $activationId
     */
    public function withActivationId(SimpleQueryType|null $activationId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getFulfillmentId(): SimpleQueryType|null
    {
        return $this->fulfillmentId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $fulfillmentId
     */
    public function withFulfillmentId(SimpleQueryType|null $fulfillmentId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getProduct(): SimpleQueryType|null
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $product
     */
    public function withProduct(SimpleQueryType|null $product): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getHostId(): SimpleQueryType|null
    {
        return $this->hostId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $hostId
     */
    public function withHostId(SimpleQueryType|null $hostId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->hostId = $hostId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getNodeLockHostId(): SimpleQueryType|null
    {
        return $this->nodeLockHostId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $nodeLockHostId
     */
    public function withNodeLockHostId(SimpleQueryType|null $nodeLockHostId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->nodeLockHostId = $nodeLockHostId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getSoldTo(): SimpleQueryType|null
    {
        return $this->soldTo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $soldTo
     */
    public function withSoldTo(SimpleQueryType|null $soldTo): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getFulfillDate(): DateQueryType|null
    {
        return $this->fulfillDate;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $fulfillDate
     */
    public function withFulfillDate(DateQueryType|null $fulfillDate): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    public function getFulfillDateTime(): DateTimeQueryType|null
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $fulfillDateTime
     */
    public function withFulfillDateTime(DateTimeQueryType|null $fulfillDateTime): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getStartDate(): DateQueryType|null
    {
        return $this->startDate;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $startDate
     */
    public function withStartDate(DateQueryType|null $startDate): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateQueryType|null
     */
    public function getExpirationDate(): DateQueryType|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DateQueryType|null  $expirationDate
     */
    public function withExpirationDate(DateQueryType|null $expirationDate): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    public function getLastModifiedDateTime(): DateTimeQueryType|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     */
    public function withLastModifiedDateTime(DateTimeQueryType|null $lastModifiedDateTime): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\StateQueryType|null
     */
    public function getState(): StateQueryType|null
    {
        return $this->state;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StateQueryType|null  $state
     */
    public function withState(StateQueryType|null $state): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getLicenseTechnology(): SimpleQueryType|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $licenseTechnology
     */
    public function withLicenseTechnology(SimpleQueryType|null $licenseTechnology): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getUserId(): string|null
    {
        return $this->userId;
    }

    public function withUserId(string|null $userId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getFulfillmentSource(): string|null
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(string|null $fulfillmentSource): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
     */
    public function getCustomAttributes(): CustomAttributesQueryListType|null
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null  $customAttributes
     */
    public function withCustomAttributes(CustomAttributesQueryListType|null $customAttributes): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null
     */
    public function getCustomHostAttributes(): CustomAttributesQueryListType|null
    {
        return $this->customHostAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributesQueryListType|null  $customHostAttributes
     */
    public function withCustomHostAttributes(CustomAttributesQueryListType|null $customHostAttributes): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    public function getActivationType(): string|null
    {
        return $this->activationType;
    }

    public function withActivationType(string|null $activationType): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
