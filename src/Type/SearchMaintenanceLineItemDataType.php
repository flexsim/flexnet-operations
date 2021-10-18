<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchMaintenanceLineItemDataType extends FlexnetType
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
    protected $maintenanceProductName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $maintenanceProductVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $partNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $startDate;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $expirationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $orderId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $orderLineNumber;

    /**
     * @var bool
     */
    protected $withNoOrderId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    protected $maintenanceLineItemAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductVersion
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderLineNumber
     * @var bool $withNoOrderId
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\DateQueryType $startDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderLineNumber = null, bool $withNoOrderId = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->activationId = $activationId;
        $this->maintenanceProductName = $maintenanceProductName;
        $this->maintenanceProductVersion = $maintenanceProductVersion;
        $this->partNumber = $partNumber;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->withNoOrderId = $withNoOrderId;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductVersion
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderLineNumber
     * @var bool $withNoOrderId
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber = null, \Flexsim\FlexnetOperations\Type\DateQueryType $startDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderLineNumber = null, bool $withNoOrderId = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes = null)
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
    public function getMaintenanceProductName()
    {
        return $this->maintenanceProductName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductName
     * @return $this
     */
    public function setMaintenanceProductName($maintenanceProductName)
    {
        $this->maintenanceProductName = $maintenanceProductName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getMaintenanceProductVersion()
    {
        return $this->maintenanceProductVersion;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $maintenanceProductVersion
     * @return $this
     */
    public function setMaintenanceProductVersion($maintenanceProductVersion)
    {
        $this->maintenanceProductVersion = $maintenanceProductVersion;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
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
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPermanent()
    {
        return $this->isPermanent;
    }

    /**
     * @param bool $isPermanent
     * @return $this
     */
    public function setIsPermanent($isPermanent)
    {
        $this->isPermanent = $isPermanent;
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
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderLineNumber
     * @return $this
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function getWithNoOrderId()
    {
        return $this->withNoOrderId;
    }

    /**
     * @param bool $withNoOrderId
     * @return $this
     */
    public function setWithNoOrderId($withNoOrderId)
    {
        $this->withNoOrderId = $withNoOrderId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    public function getMaintenanceLineItemAttributes()
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes
     * @return $this
     */
    public function setMaintenanceLineItemAttributes($maintenanceLineItemAttributes)
    {
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
        return $this;
    }
}
