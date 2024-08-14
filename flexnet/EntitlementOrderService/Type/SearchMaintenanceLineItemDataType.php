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
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $activationId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $maintenanceProductName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $maintenanceProductVersion = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $createdOnDateTime = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $lastModifiedDateTime = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderLineNumber = null, ?bool $withNoOrderId = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes = null)
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

    public static function create(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $activationId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $maintenanceProductName = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $maintenanceProductVersion = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate = null, ?bool $isPermanent = null, ?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $createdOnDateTime = null, ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $lastModifiedDateTime = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderId = null, ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderLineNumber = null, ?bool $withNoOrderId = null, ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $entitlementId): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getActivationId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $activationId): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getMaintenanceProductName(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->maintenanceProductName;
    }

    public function withMaintenanceProductName(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $maintenanceProductName): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProductName = $maintenanceProductName;

        return $new;
    }

    public function getMaintenanceProductVersion(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->maintenanceProductVersion;
    }

    public function withMaintenanceProductVersion(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $maintenanceProductVersion): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProductVersion = $maintenanceProductVersion;

        return $new;
    }

    public function getPartNumber(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $partNumber): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getStartDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $startDate): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?\Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\Flexnet\EntitlementOrderService\Type\DateQueryType $expirationDate): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOnDateTime(): ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $createdOnDateTime): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?\Flexnet\EntitlementOrderService\Type\DateTimeQueryType $lastModifiedDateTime): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getOrderId(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->orderId;
    }

    public function withOrderId(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderId): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?\Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?\Flexnet\EntitlementOrderService\Type\SimpleQueryType $orderLineNumber): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getWithNoOrderId(): ?bool
    {
        return $this->withNoOrderId;
    }

    public function withWithNoOrderId(?bool $withNoOrderId): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->withNoOrderId = $withNoOrderId;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?\Flexnet\EntitlementOrderService\Type\CustomAttributesQueryListType $maintenanceLineItemAttributes): \Flexnet\EntitlementOrderService\Type\SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }
}
