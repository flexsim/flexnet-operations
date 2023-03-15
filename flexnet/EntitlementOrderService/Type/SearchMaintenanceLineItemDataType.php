<?php

namespace Flexnet\EntitlementOrderService\Type;

class SearchMaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $entitlementId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $activationId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $maintenanceProductName;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $maintenanceProductVersion;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $partNumber;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $startDate;

    /**
     * @var bool|null
     */
    private $isPermanent;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    private $expirationDate;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    private $createdOnDateTime;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    private $lastModifiedDateTime;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $orderId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    private $orderLineNumber;

    /**
     * @var bool|null
     */
    private $withNoOrderId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null
     */
    private $maintenanceLineItemAttributes;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $maintenanceProductName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $maintenanceProductVersion
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $createdOnDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderLineNumber
     * @param  bool|null  $withNoOrderId
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $maintenanceLineItemAttributes
     */
    public function __construct(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $activationId = null, SimpleQueryType|null $maintenanceProductName = null, SimpleQueryType|null $maintenanceProductVersion = null, SimpleQueryType|null $partNumber = null, DateQueryType|null $startDate = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateTimeQueryType|null $createdOnDateTime = null, DateTimeQueryType|null $lastModifiedDateTime = null, SimpleQueryType|null $orderId = null, SimpleQueryType|null $orderLineNumber = null, bool|null $withNoOrderId = null, CustomAttributesQueryListType|null $maintenanceLineItemAttributes = null)
    {
        $this->entitlementId = $entitlementId;
        $this->activationId = $activationId;
        $this->maintenanceProductName = $maintenanceProductName;
        $this->maintenanceProductVersion = $maintenanceProductVersion;
        $this->partNumber = $partNumber;
        $this->startDate = $startDate;
        $this->isPermanent = $isPermanent;
        $this->expirationDate = $expirationDate;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->orderId = $orderId;
        $this->orderLineNumber = $orderLineNumber;
        $this->withNoOrderId = $withNoOrderId;
        $this->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $activationId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $maintenanceProductName
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $maintenanceProductVersion
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     * @param  bool|null  $isPermanent
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $createdOnDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderId
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderLineNumber
     * @param  bool|null  $withNoOrderId
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $maintenanceLineItemAttributes
     */
    public static function create(SimpleQueryType|null $entitlementId = null, SimpleQueryType|null $activationId = null, SimpleQueryType|null $maintenanceProductName = null, SimpleQueryType|null $maintenanceProductVersion = null, SimpleQueryType|null $partNumber = null, DateQueryType|null $startDate = null, bool|null $isPermanent = null, DateQueryType|null $expirationDate = null, DateTimeQueryType|null $createdOnDateTime = null, DateTimeQueryType|null $lastModifiedDateTime = null, SimpleQueryType|null $orderId = null, SimpleQueryType|null $orderLineNumber = null, bool|null $withNoOrderId = null, CustomAttributesQueryListType|null $maintenanceLineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getEntitlementId(): SimpleQueryType|null
    {
        return $this->entitlementId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $entitlementId
     */
    public function withEntitlementId(SimpleQueryType|null $entitlementId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getActivationId(): SimpleQueryType|null
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $activationId
     */
    public function withActivationId(SimpleQueryType|null $activationId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getMaintenanceProductName(): SimpleQueryType|null
    {
        return $this->maintenanceProductName;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $maintenanceProductName
     */
    public function withMaintenanceProductName(SimpleQueryType|null $maintenanceProductName): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProductName = $maintenanceProductName;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getMaintenanceProductVersion(): SimpleQueryType|null
    {
        return $this->maintenanceProductVersion;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $maintenanceProductVersion
     */
    public function withMaintenanceProductVersion(SimpleQueryType|null $maintenanceProductVersion): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProductVersion = $maintenanceProductVersion;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getPartNumber(): SimpleQueryType|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $partNumber
     */
    public function withPartNumber(SimpleQueryType|null $partNumber): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getStartDate(): DateQueryType|null
    {
        return $this->startDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $startDate
     */
    public function withStartDate(DateQueryType|null $startDate): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): bool|null
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(bool|null $isPermanent): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateQueryType|null
     */
    public function getExpirationDate(): DateQueryType|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateQueryType|null  $expirationDate
     */
    public function withExpirationDate(DateQueryType|null $expirationDate): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    public function getCreatedOnDateTime(): DateTimeQueryType|null
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $createdOnDateTime
     */
    public function withCreatedOnDateTime(DateTimeQueryType|null $createdOnDateTime): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null
     */
    public function getLastModifiedDateTime(): DateTimeQueryType|null
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DateTimeQueryType|null  $lastModifiedDateTime
     */
    public function withLastModifiedDateTime(DateTimeQueryType|null $lastModifiedDateTime): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getOrderId(): SimpleQueryType|null
    {
        return $this->orderId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderId
     */
    public function withOrderId(SimpleQueryType|null $orderId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null
     */
    public function getOrderLineNumber(): SimpleQueryType|null
    {
        return $this->orderLineNumber;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleQueryType|null  $orderLineNumber
     */
    public function withOrderLineNumber(SimpleQueryType|null $orderLineNumber): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getWithNoOrderId(): bool|null
    {
        return $this->withNoOrderId;
    }

    public function withWithNoOrderId(bool|null $withNoOrderId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->withNoOrderId = $withNoOrderId;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null
     */
    public function getMaintenanceLineItemAttributes(): CustomAttributesQueryListType|null
    {
        return $this->maintenanceLineItemAttributes;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType|null  $maintenanceLineItemAttributes
     */
    public function withMaintenanceLineItemAttributes(CustomAttributesQueryListType|null $maintenanceLineItemAttributes): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }
}
