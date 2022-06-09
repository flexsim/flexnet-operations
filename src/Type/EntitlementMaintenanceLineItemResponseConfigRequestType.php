<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementMaintenanceLineItemResponseConfigRequestType extends FlexnetType
{
    /**
     * @var bool
     */
    protected $activationId;

    /**
     * @var bool
     */
    protected $state;

    /**
     * @var bool
     */
    protected $orderId;

    /**
     * @var bool
     */
    protected $orderLineNumber;

    /**
     * @var bool
     */
    protected $entitlementId;

    /**
     * @var bool
     */
    protected $maintenanceProduct;

    /**
     * @var bool
     */
    protected $maintenancePartNumber;

    /**
     * @var bool
     */
    protected $maintenancePartNumberDescription;

    /**
     * @var bool
     */
    protected $startDate;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var bool
     */
    protected $expirationDate;

    /**
     * @var bool
     */
    protected $createdOnDateTime;

    /**
     * @var bool
     */
    protected $lastModifiedDateTime;

    /**
     * @var bool
     */
    protected $maintenanceLineItemAttributes;

    /**
     * @var bool
     */
    protected $linkedEntitlementLineItem;

    /**
     * Constructor
     *
     * @param bool $activationId
     * @param bool $state
     * @param bool $orderId
     * @param bool $orderLineNumber
     * @param bool $entitlementId
     * @param bool $maintenanceProduct
     * @param bool $maintenancePartNumber
     * @param bool $maintenancePartNumberDescription
     * @param bool $startDate
     * @param bool $isPermanent
     * @param bool $expirationDate
     * @param bool $createdOnDateTime
     * @param bool $lastModifiedDateTime
     * @param bool $maintenanceLineItemAttributes
     * @param bool $linkedEntitlementLineItem
     */
    public function __construct(bool $activationId = null, bool $state = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $maintenanceProduct = null, bool $maintenancePartNumber = null, bool $maintenancePartNumberDescription = null, bool $startDate = null, bool $isPermanent = null, bool $expirationDate = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $maintenanceLineItemAttributes = null, bool $linkedEntitlementLineItem = null)
    {
        $this->activationId = $activationId;
        $this->state = $state;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->entitlementId = $entitlementId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->maintenancePartNumber = $maintenancePartNumber;
        $this->maintenancePartNumberDescription = $maintenancePartNumberDescription;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
        $this->linkedEntitlementLineItem = $linkedEntitlementLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $activationId
     * @param bool $state
     * @param bool $orderId
     * @param bool $orderLineNumber
     * @param bool $entitlementId
     * @param bool $maintenanceProduct
     * @param bool $maintenancePartNumber
     * @param bool $maintenancePartNumberDescription
     * @param bool $startDate
     * @param bool $isPermanent
     * @param bool $expirationDate
     * @param bool $createdOnDateTime
     * @param bool $lastModifiedDateTime
     * @param bool $maintenanceLineItemAttributes
     * @param bool $linkedEntitlementLineItem
     */
    public static function create(bool $activationId = null, bool $state = null, bool $orderId = null, bool $orderLineNumber = null, bool $entitlementId = null, bool $maintenanceProduct = null, bool $maintenancePartNumber = null, bool $maintenancePartNumberDescription = null, bool $startDate = null, bool $isPermanent = null, bool $expirationDate = null, bool $createdOnDateTime = null, bool $lastModifiedDateTime = null, bool $maintenanceLineItemAttributes = null, bool $linkedEntitlementLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param bool $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param bool $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param bool $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param bool $orderLineNumber
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
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param bool $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintenanceProduct()
    {
        return $this->maintenanceProduct;
    }

    /**
     * @param bool $maintenanceProduct
     * @return $this
     */
    public function setMaintenanceProduct($maintenanceProduct)
    {
        $this->maintenanceProduct = $maintenanceProduct;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintenancePartNumber()
    {
        return $this->maintenancePartNumber;
    }

    /**
     * @param bool $maintenancePartNumber
     * @return $this
     */
    public function setMaintenancePartNumber($maintenancePartNumber)
    {
        $this->maintenancePartNumber = $maintenancePartNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintenancePartNumberDescription()
    {
        return $this->maintenancePartNumberDescription;
    }

    /**
     * @param bool $maintenancePartNumberDescription
     * @return $this
     */
    public function setMaintenancePartNumberDescription($maintenancePartNumberDescription)
    {
        $this->maintenancePartNumberDescription = $maintenancePartNumberDescription;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param bool $startDate
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
     * @return bool
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param bool $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCreatedOnDateTime()
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param bool $createdOnDateTime
     * @return $this
     */
    public function setCreatedOnDateTime($createdOnDateTime)
    {
        $this->createdOnDateTime = $createdOnDateTime;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param bool $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMaintenanceLineItemAttributes()
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param bool $maintenanceLineItemAttributes
     * @return $this
     */
    public function setMaintenanceLineItemAttributes($maintenanceLineItemAttributes)
    {
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLinkedEntitlementLineItem()
    {
        return $this->linkedEntitlementLineItem;
    }

    /**
     * @param bool $linkedEntitlementLineItem
     * @return $this
     */
    public function setLinkedEntitlementLineItem($linkedEntitlementLineItem)
    {
        $this->linkedEntitlementLineItem = $linkedEntitlementLineItem;

        return $this;
    }
}
