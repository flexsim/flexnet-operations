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
     *
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $consolidatedLicenseId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $criteria
     * @param \Flexnet\LicenseService\Type\StateQueryType|null $state
     */
    public function __construct(\Flexnet\LicenseService\Type\SimpleQueryType|null $consolidatedLicenseId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $criteria = null, \Flexnet\LicenseService\Type\StateQueryType|null $state = null)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
        $this->fulfillmentId = $fulfillmentId;
        $this->activationId = $activationId;
        $this->entitlementId = $entitlementId;
        $this->soldTo = $soldTo;
        $this->criteria = $criteria;
        $this->state = $state;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $consolidatedLicenseId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $criteria
     * @param \Flexnet\LicenseService\Type\StateQueryType|null $state
     */
    public static function create(\Flexnet\LicenseService\Type\SimpleQueryType|null $consolidatedLicenseId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $activationId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo = null, \Flexnet\LicenseService\Type\SimpleQueryType|null $criteria = null, \Flexnet\LicenseService\Type\StateQueryType|null $state = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getConsolidatedLicenseId() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $consolidatedLicenseId
     * @return ConsolidatedFulfillmentsQPType
     */
    public function withConsolidatedLicenseId(\Flexnet\LicenseService\Type\SimpleQueryType|null $consolidatedLicenseId) : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

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
     * @return ConsolidatedFulfillmentsQPType
     */
    public function withFulfillmentId(\Flexnet\LicenseService\Type\SimpleQueryType|null $fulfillmentId) : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

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
     * @return ConsolidatedFulfillmentsQPType
     */
    public function withActivationId(\Flexnet\LicenseService\Type\SimpleQueryType|null $activationId) : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
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
     * @return ConsolidatedFulfillmentsQPType
     */
    public function withEntitlementId(\Flexnet\LicenseService\Type\SimpleQueryType|null $entitlementId) : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

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
     * @return ConsolidatedFulfillmentsQPType
     */
    public function withSoldTo(\Flexnet\LicenseService\Type\SimpleQueryType|null $soldTo) : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getCriteria() : \Flexnet\LicenseService\Type\SimpleQueryType|null
    {
        return $this->criteria;
    }

    /**
     * @param \Flexnet\LicenseService\Type\SimpleQueryType|null $criteria
     * @return ConsolidatedFulfillmentsQPType
     */
    public function withCriteria(\Flexnet\LicenseService\Type\SimpleQueryType|null $criteria) : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->criteria = $criteria;

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
     * @return ConsolidatedFulfillmentsQPType
     */
    public function withState(\Flexnet\LicenseService\Type\StateQueryType|null $state) : \Flexnet\LicenseService\Type\ConsolidatedFulfillmentsQPType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }
}

