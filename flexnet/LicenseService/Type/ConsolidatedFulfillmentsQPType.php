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
    public function __construct(SimpleQueryType $consolidatedLicenseId = null, SimpleQueryType $fulfillmentId = null, SimpleQueryType $activationId = null, SimpleQueryType $entitlementId = null, SimpleQueryType $soldTo = null, SimpleQueryType $criteria = null, StateQueryType $state = null)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
        $this->fulfillmentId = $fulfillmentId;
        $this->activationId = $activationId;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->criteria = $criteria;
        $this->state = $state;
    }

    public static function create(SimpleQueryType $consolidatedLicenseId = null, SimpleQueryType $fulfillmentId = null, SimpleQueryType $activationId = null, SimpleQueryType $entitlementId = null, SimpleQueryType $soldTo = null, SimpleQueryType $criteria = null, StateQueryType $state = null)
    {
        return new static(...\func_get_args());
    }

    public function getConsolidatedLicenseId(): ?SimpleQueryType
    {
        return $this->consolidatedLicenseId;
    }

    public function withConsolidatedLicenseId(?SimpleQueryType $consolidatedLicenseId): ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

        return $new;
    }

    public function getFulfillmentId(): ?SimpleQueryType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?SimpleQueryType $fulfillmentId): ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getActivationId(): ?SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?SimpleQueryType $activationId): ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getEntitlementId(): ?SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?SimpleQueryType $entitlementId): ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getSoldTo(): ?SimpleQueryType
    {
        return $this->soldTo;
    }

    public function withSoldTo(?SimpleQueryType $soldTo): ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getCriteria(): ?SimpleQueryType
    {
        return $this->criteria;
    }

    public function withCriteria(?SimpleQueryType $criteria): ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->criteria = $criteria;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }
}
