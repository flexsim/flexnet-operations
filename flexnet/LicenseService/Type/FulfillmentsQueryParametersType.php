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
     */
    public function __construct(?\Flexnet\LicenseService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $activationId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $product = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $hostId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $nodeLockHostId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\LicenseService\Type\DateQueryType $fulfillDate = null, ?\Flexnet\LicenseService\Type\DateTimeQueryType $fulfillDateTime = null, ?\Flexnet\LicenseService\Type\DateQueryType $startDate = null, ?\Flexnet\LicenseService\Type\DateQueryType $expirationDate = null, ?\Flexnet\LicenseService\Type\DateTimeQueryType $lastModifiedDateTime = null, ?\Flexnet\LicenseService\Type\StateQueryType $state = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $licenseTechnology = null, ?string $userId = null, ?string $fulfillmentSource = null, ?\Flexnet\LicenseService\Type\CustomAttributesQueryListType $customAttributes = null, ?\Flexnet\LicenseService\Type\CustomAttributesQueryListType $customHostAttributes = null, ?string $activationType = null)
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

    public static function create(?\Flexnet\LicenseService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $activationId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $product = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $hostId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $nodeLockHostId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\LicenseService\Type\DateQueryType $fulfillDate = null, ?\Flexnet\LicenseService\Type\DateTimeQueryType $fulfillDateTime = null, ?\Flexnet\LicenseService\Type\DateQueryType $startDate = null, ?\Flexnet\LicenseService\Type\DateQueryType $expirationDate = null, ?\Flexnet\LicenseService\Type\DateTimeQueryType $lastModifiedDateTime = null, ?\Flexnet\LicenseService\Type\StateQueryType $state = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $licenseTechnology = null, ?string $userId = null, ?string $fulfillmentSource = null, ?\Flexnet\LicenseService\Type\CustomAttributesQueryListType $customAttributes = null, ?\Flexnet\LicenseService\Type\CustomAttributesQueryListType $customHostAttributes = null, ?string $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?\Flexnet\LicenseService\Type\SimpleQueryType $entitlementId): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getActivationId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?\Flexnet\LicenseService\Type\SimpleQueryType $activationId): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getFulfillmentId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getProduct(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->product;
    }

    public function withProduct(?\Flexnet\LicenseService\Type\SimpleQueryType $product): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getHostId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->hostId;
    }

    public function withHostId(?\Flexnet\LicenseService\Type\SimpleQueryType $hostId): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->hostId = $hostId;

        return $new;
    }

    public function getNodeLockHostId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->nodeLockHostId;
    }

    public function withNodeLockHostId(?\Flexnet\LicenseService\Type\SimpleQueryType $nodeLockHostId): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->nodeLockHostId = $nodeLockHostId;

        return $new;
    }

    public function getSoldTo(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?\Flexnet\LicenseService\Type\SimpleQueryType $soldTo): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getFulfillDate(): ?\Flexnet\LicenseService\Type\DateQueryType
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(?\Flexnet\LicenseService\Type\DateQueryType $fulfillDate): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): ?\Flexnet\LicenseService\Type\DateTimeQueryType
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(?\Flexnet\LicenseService\Type\DateTimeQueryType $fulfillDateTime): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getStartDate(): ?\Flexnet\LicenseService\Type\DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?\Flexnet\LicenseService\Type\DateQueryType $startDate): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?\Flexnet\LicenseService\Type\DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\Flexnet\LicenseService\Type\DateQueryType $expirationDate): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\Flexnet\LicenseService\Type\DateTimeQueryType
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\Flexnet\LicenseService\Type\DateTimeQueryType $lastModifiedDateTime): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getState(): ?\Flexnet\LicenseService\Type\StateQueryType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\LicenseService\Type\StateQueryType $state): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?\Flexnet\LicenseService\Type\SimpleQueryType $licenseTechnology): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function withUserId(?string $userId): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getFulfillmentSource(): ?string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?string $fulfillmentSource): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getCustomAttributes(): ?\Flexnet\LicenseService\Type\CustomAttributesQueryListType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?\Flexnet\LicenseService\Type\CustomAttributesQueryListType $customAttributes): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getCustomHostAttributes(): ?\Flexnet\LicenseService\Type\CustomAttributesQueryListType
    {
        return $this->customHostAttributes;
    }

    public function withCustomHostAttributes(?\Flexnet\LicenseService\Type\CustomAttributesQueryListType $customHostAttributes): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    public function getActivationType(): ?string
    {
        return $this->activationType;
    }

    public function withActivationType(?string $activationType): \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
