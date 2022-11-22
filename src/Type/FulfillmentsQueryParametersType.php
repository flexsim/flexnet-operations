<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentsQueryParametersType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $fulfillmentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $product;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $hostId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $nodeLockHostId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $fulfillDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    protected $fulfillDateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $startDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $expirationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    protected $lastModifiedDateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    protected $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $licenseTechnology;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var string
     */
    protected $fulfillmentSource;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    protected $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    protected $customHostAttributes;

    /**
     * @var string
     */
    protected $activationType;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $entitlementId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $activationId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $fulfillmentId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $product
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $hostId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $nodeLockHostId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $soldTo
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $fulfillDate
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $fulfillDateTime
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $startDate
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $expirationDate
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $lastModifiedDateTime
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $licenseTechnology
     * @param  string  $userId
     * @param  string  $fulfillmentSource
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType  $customAttributes
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType  $customHostAttributes
     * @param  string  $activationType
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

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $entitlementId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $activationId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $fulfillmentId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $product
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $hostId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $nodeLockHostId
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $soldTo
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $fulfillDate
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $fulfillDateTime
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $startDate
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $expirationDate
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $lastModifiedDateTime
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $licenseTechnology
     * @param  string  $userId
     * @param  string  $fulfillmentSource
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType  $customAttributes
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType  $customHostAttributes
     * @param  string  $activationType
     */
    public static function create(SimpleQueryType $entitlementId = null, SimpleQueryType $activationId = null, SimpleQueryType $fulfillmentId = null, SimpleQueryType $product = null, SimpleQueryType $hostId = null, SimpleQueryType $nodeLockHostId = null, SimpleQueryType $soldTo = null, DateQueryType $fulfillDate = null, DateTimeQueryType $fulfillDateTime = null, DateQueryType $startDate = null, DateQueryType $expirationDate = null, DateTimeQueryType $lastModifiedDateTime = null, StateQueryType $state = null, SimpleQueryType $licenseTechnology = null, string $userId = null, string $fulfillmentSource = null, CustomAttributesQueryListType $customAttributes = null, CustomAttributesQueryListType $customHostAttributes = null, string $activationType = null)
    {
        return new self(...func_get_args());
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
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getHostId()
    {
        return $this->hostId;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $hostId
     * @return $this
     */
    public function setHostId($hostId)
    {
        $this->hostId = $hostId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getNodeLockHostId()
    {
        return $this->nodeLockHostId;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $nodeLockHostId
     * @return $this
     */
    public function setNodeLockHostId($nodeLockHostId)
    {
        $this->nodeLockHostId = $nodeLockHostId;

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
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getFulfillDate()
    {
        return $this->fulfillDate;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $fulfillDate
     * @return $this
     */
    public function setFulfillDate($fulfillDate)
    {
        $this->fulfillDate = $fulfillDate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getFulfillDateTime()
    {
        return $this->fulfillDateTime;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $fulfillDateTime
     * @return $this
     */
    public function setFulfillDateTime($fulfillDateTime)
    {
        $this->fulfillDateTime = $fulfillDateTime;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DateTimeQueryType  $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;

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

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param  string  $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentSource()
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param  string  $fulfillmentSource
     * @return $this
     */
    public function setFulfillmentSource($fulfillmentSource)
    {
        $this->fulfillmentSource = $fulfillmentSource;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType  $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    public function getCustomHostAttributes()
    {
        return $this->customHostAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType  $customHostAttributes
     * @return $this
     */
    public function setCustomHostAttributes($customHostAttributes)
    {
        $this->customHostAttributes = $customHostAttributes;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivationType()
    {
        return $this->activationType;
    }

    /**
     * @param  string  $activationType
     * @return $this
     */
    public function setActivationType($activationType)
    {
        $this->activationType = $activationType;

        return $this;
    }
}
