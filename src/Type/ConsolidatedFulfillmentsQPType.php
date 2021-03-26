<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedFulfillmentsQPType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $consolidatedLicenseId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $fulfillmentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $criteria;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    private $state;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $consolidatedLicenseId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $criteria
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $consolidatedLicenseId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $criteria = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null)
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
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $consolidatedLicenseId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $criteria
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $consolidatedLicenseId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $criteria = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null)
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
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $consolidatedLicenseId
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
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId
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
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
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
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
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
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
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
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $criteria
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
     * @param \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }


}

