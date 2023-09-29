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
    public function __construct(SimpleQueryType $entitlementId = null, SimpleQueryType $activationId = null, SimpleQueryType $fulfillmentId = null, SimpleQueryType $product = null, SimpleQueryType $hostId = null, SimpleQueryType $nodeLockHostId = null, SimpleQueryType $soldTo = null, DateQueryType $fulfillDate = null, DateTimeQueryType $fulfillDateTime = null, DateQueryType $startDate = null, DateQueryType $expirationDate = null, DateTimeQueryType $lastModifiedDateTime = null, StateQueryType $state = null, SimpleQueryType $licenseTechnology = null, string $userId = null, string $fulfillmentSource = null, CustomAttributesQueryListType $customAttributes = null, CustomAttributesQueryListType $customHostAttributes = null, string $activationType = null)
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

    public static function create(SimpleQueryType $entitlementId = null, SimpleQueryType $activationId = null, SimpleQueryType $fulfillmentId = null, SimpleQueryType $product = null, SimpleQueryType $hostId = null, SimpleQueryType $nodeLockHostId = null, SimpleQueryType $soldTo = null, DateQueryType $fulfillDate = null, DateTimeQueryType $fulfillDateTime = null, DateQueryType $startDate = null, DateQueryType $expirationDate = null, DateTimeQueryType $lastModifiedDateTime = null, StateQueryType $state = null, SimpleQueryType $licenseTechnology = null, string $userId = null, string $fulfillmentSource = null, CustomAttributesQueryListType $customAttributes = null, CustomAttributesQueryListType $customHostAttributes = null, string $activationType = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?SimpleQueryType $entitlementId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getActivationId(): ?SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?SimpleQueryType $activationId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getFulfillmentId(): ?SimpleQueryType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?SimpleQueryType $fulfillmentId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getProduct(): ?SimpleQueryType
    {
        return $this->product;
    }

    public function withProduct(?SimpleQueryType $product): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getHostId(): ?SimpleQueryType
    {
        return $this->hostId;
    }

    public function withHostId(?SimpleQueryType $hostId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->hostId = $hostId;

        return $new;
    }

    public function getNodeLockHostId(): ?SimpleQueryType
    {
        return $this->nodeLockHostId;
    }

    public function withNodeLockHostId(?SimpleQueryType $nodeLockHostId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->nodeLockHostId = $nodeLockHostId;

        return $new;
    }

    public function getSoldTo(): ?SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?SimpleQueryType $soldTo): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getFulfillDate(): ?DateQueryType
    {
        return $this->fulfillDate;
    }

    public function withFulfillDate(?DateQueryType $fulfillDate): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDate = $fulfillDate;

        return $new;
    }

    public function getFulfillDateTime(): ?DateTimeQueryType
    {
        return $this->fulfillDateTime;
    }

    public function withFulfillDateTime(?DateTimeQueryType $fulfillDateTime): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillDateTime = $fulfillDateTime;

        return $new;
    }

    public function getStartDate(): ?DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?DateQueryType $startDate): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getExpirationDate(): ?DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?DateQueryType $expirationDate): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getLastModifiedDateTime(): ?DateTimeQueryType
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?DateTimeQueryType $lastModifiedDateTime): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getLicenseTechnology(): ?SimpleQueryType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(?SimpleQueryType $licenseTechnology): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function withUserId(?string $userId): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getFulfillmentSource(): ?string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?string $fulfillmentSource): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getCustomAttributes(): ?CustomAttributesQueryListType
    {
        return $this->customAttributes;
    }

    public function withCustomAttributes(?CustomAttributesQueryListType $customAttributes): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customAttributes = $customAttributes;

        return $new;
    }

    public function getCustomHostAttributes(): ?CustomAttributesQueryListType
    {
        return $this->customHostAttributes;
    }

    public function withCustomHostAttributes(?CustomAttributesQueryListType $customHostAttributes): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->customHostAttributes = $customHostAttributes;

        return $new;
    }

    public function getActivationType(): ?string
    {
        return $this->activationType;
    }

    public function withActivationType(?string $activationType): FulfillmentsQueryParametersType
    {
        $new = clone $this;
        $new->activationType = $activationType;

        return $new;
    }
}
