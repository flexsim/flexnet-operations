<?php

namespace Flexnet\LicenseService\Type;

class ConsolidatedFulfillmentsQPType
{
    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $consolidatedLicenseId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $fulfillmentId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $activationId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $soldTo;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $criteria;

    /**
     * @var \Flexnet\LicenseService\Type\StateQueryType|null
     */
    private $state;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\LicenseService\Type\SimpleQueryType $consolidatedLicenseId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $activationId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $criteria = null, ?\Flexnet\LicenseService\Type\StateQueryType $state = null)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
        $this->fulfillmentId = $fulfillmentId;
        $this->activationId = $activationId;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->criteria = $criteria;
        $this->state = $state;
    }

    public static function create(?\Flexnet\LicenseService\Type\SimpleQueryType $consolidatedLicenseId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $activationId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $soldTo = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $criteria = null, ?\Flexnet\LicenseService\Type\StateQueryType $state = null)
    {
        return new static(...\func_get_args());
    }

    public function getConsolidatedLicenseId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->consolidatedLicenseId;
    }

    public function withConsolidatedLicenseId(?\Flexnet\LicenseService\Type\SimpleQueryType $consolidatedLicenseId): \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

        return $new;
    }

    public function getFulfillmentId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId): \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getActivationId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?\Flexnet\LicenseService\Type\SimpleQueryType $activationId): \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getEntitlementId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?\Flexnet\LicenseService\Type\SimpleQueryType $entitlementId): \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?\Flexnet\LicenseService\Type\SimpleQueryType $soldTo): \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getCriteria(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->criteria;
    }

    public function withCriteria(?\Flexnet\LicenseService\Type\SimpleQueryType $criteria): \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->criteria = $criteria;

        return $new;
    }

    public function getState(): ?\Flexnet\LicenseService\Type\StateQueryType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\LicenseService\Type\StateQueryType $state): \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }
}
