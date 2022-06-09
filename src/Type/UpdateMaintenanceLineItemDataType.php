<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateMaintenanceLineItemDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItemIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdType
     */
    protected $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $maintenanceProduct;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    protected $partNumber;

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $orderLineNumber;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDate;

    /**
     * @var bool
     */
    protected $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $parentLineItem;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $maintenanceLineItemAttributes;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param \Flexsim\FlexnetOperations\Type\IdType $activationId
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @param string $orderId
     * @param string $orderLineNumber
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $expirationDate
     * @param bool $isPermanent
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexsim\FlexnetOperations\Type\IdType $activationId = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->activationId = $activationId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->partNumber = $partNumber;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->isPermanent = $isPermanent;
        $this->parentLineItem = $parentLineItem;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param \Flexsim\FlexnetOperations\Type\IdType $activationId
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @param string $orderId
     * @param string $orderLineNumber
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $expirationDate
     * @param bool $isPermanent
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexsim\FlexnetOperations\Type\IdType $activationId = null, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $maintenanceLineItemAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifier()
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @return $this
     */
    public function setLineItemIdentifier($lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\IdType
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\IdType $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;

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
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getParentLineItem()
    {
        return $this->parentLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @return $this
     */
    public function setParentLineItem($parentLineItem)
    {
        $this->parentLineItem = $parentLineItem;

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
