<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementMaintenanceLineItemPropertiesType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $activationId;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $orderLineNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $maintenanceProduct;

    /**
     * @var string
     */
    protected $maintenanceProductDescription;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    protected $maintenancePartNumber;

    /**
     * @var string
     */
    protected $maintenancePartNumberDescription;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDate;

    /**
     * @var \DateTimeInterface
     */
    protected $createdOnDateTime;

    /**
     * @var \DateTimeInterface
     */
    protected $lastModifiedDateTime;

    /**
     * @var string
     */
    protected $linkedLineItemActivationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $maintenanceLineItemAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId
     * @var string $state
     * @var string $orderId
     * @var string $orderLineNumber
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct
     * @var string $maintenanceProductDescription
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $maintenancePartNumber
     * @var string $maintenancePartNumberDescription
     * @var \DateTimeInterface $startDate
     * @var bool $isPermanent
     * @var \DateTimeInterface $expirationDate
     * @var \DateTimeInterface $createdOnDateTime
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var string|array $linkedLineItemActivationId
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId = null, string $state = null, string $orderId = null, string $orderLineNumber = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct = null, string $maintenanceProductDescription = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $maintenancePartNumber = null, string $maintenancePartNumberDescription = null, \DateTimeInterface $startDate = null, bool $isPermanent = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, $linkedLineItemActivationId = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        $this->activationId = $activationId;
        $this->state = $state;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->entitlementId = $entitlementId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->maintenanceProductDescription = $maintenanceProductDescription;
        $this->maintenancePartNumber = $maintenancePartNumber;
        $this->maintenancePartNumberDescription = $maintenancePartNumberDescription;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->linkedLineItemActivationId = $linkedLineItemActivationId;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId
     * @var string $state
     * @var string $orderId
     * @var string $orderLineNumber
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct
     * @var string $maintenanceProductDescription
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $maintenancePartNumber
     * @var string $maintenancePartNumberDescription
     * @var \DateTimeInterface $startDate
     * @var bool $isPermanent
     * @var \DateTimeInterface $expirationDate
     * @var \DateTimeInterface $createdOnDateTime
     * @var \DateTimeInterface $lastModifiedDateTime
     * @var string|array $linkedLineItemActivationId
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId = null, string $state = null, string $orderId = null, string $orderLineNumber = null, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct = null, string $maintenanceProductDescription = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $maintenancePartNumber = null, string $maintenancePartNumberDescription = null, \DateTimeInterface $startDate = null, bool $isPermanent = null, \DateTimeInterface $expirationDate = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, $linkedLineItemActivationId = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    /**
     * @param string $orderLineNumber
     * @return $this
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getMaintenanceProduct()
    {
        return $this->maintenanceProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct
     * @return $this
     */
    public function setMaintenanceProduct($maintenanceProduct)
    {
        $this->maintenanceProduct = $maintenanceProduct;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaintenanceProductDescription()
    {
        return $this->maintenanceProductDescription;
    }

    /**
     * @param string $maintenanceProductDescription
     * @return $this
     */
    public function setMaintenanceProductDescription($maintenanceProductDescription)
    {
        $this->maintenanceProductDescription = $maintenanceProductDescription;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    public function getMaintenancePartNumber()
    {
        return $this->maintenancePartNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $maintenancePartNumber
     * @return $this
     */
    public function setMaintenancePartNumber($maintenancePartNumber)
    {
        $this->maintenancePartNumber = $maintenancePartNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaintenancePartNumberDescription()
    {
        return $this->maintenancePartNumberDescription;
    }

    /**
     * @param string $maintenancePartNumberDescription
     * @return $this
     */
    public function setMaintenancePartNumberDescription($maintenancePartNumberDescription)
    {
        $this->maintenancePartNumberDescription = $maintenancePartNumberDescription;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
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
     * @return \DateTimeInterface
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTimeInterface $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedOnDateTime()
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param \DateTimeInterface $createdOnDateTime
     * @return $this
     */
    public function setCreatedOnDateTime($createdOnDateTime)
    {
        $this->createdOnDateTime = $createdOnDateTime;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedLineItemActivationId()
    {
        return $this->linkedLineItemActivationId;
    }

    /**
     * @param string $linkedLineItemActivationId
     * @return $this
     */
    public function setLinkedLineItemActivationId($linkedLineItemActivationId)
    {
        $this->linkedLineItemActivationId = $linkedLineItemActivationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getMaintenanceLineItemAttributes()
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes
     * @return $this
     */
    public function setMaintenanceLineItemAttributes($maintenanceLineItemAttributes)
    {
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
        return $this;
    }
}
