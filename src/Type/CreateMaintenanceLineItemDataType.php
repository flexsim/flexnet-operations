<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateMaintenanceLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdType
     */
    private $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $maintenanceProduct;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    private $partNumber;

    /**
     * @var string
     */
    private $orderId;

    /**
     * @var string
     */
    private $orderLineNumber;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $expirationDate;

    /**
     * @var bool
     */
    private $isPermanent;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $parentLineItem;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $associatedLineItems;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\IdType $activationId
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @var string $orderId
     * @var string $orderLineNumber
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $expirationDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $associatedLineItems
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\IdType $activationId, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, $associatedLineItems = null)
    {
        $this->activationId = $activationId;
        $this->maintenanceProduct = $maintenanceProduct;
        $this->partNumber = $partNumber;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->startDate = $startDate;
        $this->expirationDate = $expirationDate;
        $this->isPermanent = $isPermanent;
        $this->parentLineItem = $parentLineItem;
        $this->associatedLineItems = $associatedLineItems;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\IdType $activationId
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber
     * @var string $orderId
     * @var string $orderLineNumber
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $expirationDate
     * @var bool $isPermanent
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $associatedLineItems
     */
    public static function create(\Flexsim\FlexnetOperations\Type\IdType $activationId, \Flexsim\FlexnetOperations\Type\ProductIdentifierType $maintenanceProduct = null, \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumber = null, string $orderId = null, string $orderLineNumber = null, \DateTimeInterface $startDate = null, \DateTimeInterface $expirationDate = null, bool $isPermanent = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, $associatedLineItems = null)
    {
        return new self(...func_get_args());
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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getAssociatedLineItems()
    {
        return $this->associatedLineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $associatedLineItems
     * @return $this
     */
    public function setAssociatedLineItems($associatedLineItems)
    {
        $this->associatedLineItems = $associatedLineItems;
        return $this;
    }


}

