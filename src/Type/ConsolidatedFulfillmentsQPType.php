<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedFulfillmentsQPType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $consolidatedLicenseId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $fulfillmentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $criteria;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    protected $state;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $consolidatedLicenseId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $fulfillmentId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $activationId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $entitlementId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $soldTo
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $criteria
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
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

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $consolidatedLicenseId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $fulfillmentId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $activationId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $entitlementId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $soldTo
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $criteria
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
     */
    public static function create(SimpleQueryType $consolidatedLicenseId = null, SimpleQueryType $fulfillmentId = null, SimpleQueryType $activationId = null, SimpleQueryType $entitlementId = null, SimpleQueryType $soldTo = null, SimpleQueryType $criteria = null, StateQueryType $state = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getConsolidatedLicenseId()
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $consolidatedLicenseId
     * @return $this
     */
    public function setConsolidatedLicenseId($consolidatedLicenseId)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }
}
