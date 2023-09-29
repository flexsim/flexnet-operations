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
    public function __construct(SimpleQueryType $entitlementId = null, SimpleQueryType $activationId = null, SimpleQueryType $maintenanceProductName = null, SimpleQueryType $maintenanceProductVersion = null, SimpleQueryType $partNumber = null, DateQueryType $startDate = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateTimeQueryType $createdOnDateTime = null, DateTimeQueryType $lastModifiedDateTime = null, SimpleQueryType $orderId = null, SimpleQueryType $orderLineNumber = null, bool $withNoOrderId = null, CustomAttributesQueryListType $maintenanceLineItemAttributes = null)
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

    public static function create(SimpleQueryType $entitlementId = null, SimpleQueryType $activationId = null, SimpleQueryType $maintenanceProductName = null, SimpleQueryType $maintenanceProductVersion = null, SimpleQueryType $partNumber = null, DateQueryType $startDate = null, bool $isPermanent = null, DateQueryType $expirationDate = null, DateTimeQueryType $createdOnDateTime = null, DateTimeQueryType $lastModifiedDateTime = null, SimpleQueryType $orderId = null, SimpleQueryType $orderLineNumber = null, bool $withNoOrderId = null, CustomAttributesQueryListType $maintenanceLineItemAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): ?SimpleQueryType
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(?SimpleQueryType $entitlementId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getActivationId(): ?SimpleQueryType
    {
        return $this->activationId;
    }

    public function withActivationId(?SimpleQueryType $activationId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getMaintenanceProductName(): ?SimpleQueryType
    {
        return $this->maintenanceProductName;
    }

    public function withMaintenanceProductName(?SimpleQueryType $maintenanceProductName): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProductName = $maintenanceProductName;

        return $new;
    }

    public function getMaintenanceProductVersion(): ?SimpleQueryType
    {
        return $this->maintenanceProductVersion;
    }

    public function withMaintenanceProductVersion(?SimpleQueryType $maintenanceProductVersion): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceProductVersion = $maintenanceProductVersion;

        return $new;
    }

    public function getPartNumber(): ?SimpleQueryType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?SimpleQueryType $partNumber): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getStartDate(): ?DateQueryType
    {
        return $this->startDate;
    }

    public function withStartDate(?DateQueryType $startDate): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function withIsPermanent(?bool $isPermanent): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->isPermanent = $isPermanent;

        return $new;
    }

    public function getExpirationDate(): ?DateQueryType
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?DateQueryType $expirationDate): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }

    public function getCreatedOnDateTime(): ?DateTimeQueryType
    {
        return $this->createdOnDateTime;
    }

    public function withCreatedOnDateTime(?DateTimeQueryType $createdOnDateTime): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->createdOnDateTime = $createdOnDateTime;

        return $new;
    }

    public function getLastModifiedDateTime(): ?DateTimeQueryType
    {
        return $this->lastModifiedDateTime;
    }

    public function withLastModifiedDateTime(?DateTimeQueryType $lastModifiedDateTime): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->lastModifiedDateTime = $lastModifiedDateTime;

        return $new;
    }

    public function getOrderId(): ?SimpleQueryType
    {
        return $this->orderId;
    }

    public function withOrderId(?SimpleQueryType $orderId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderId = $orderId;

        return $new;
    }

    public function getOrderLineNumber(): ?SimpleQueryType
    {
        return $this->orderLineNumber;
    }

    public function withOrderLineNumber(?SimpleQueryType $orderLineNumber): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->orderLineNumber = $orderLineNumber;

        return $new;
    }

    public function getWithNoOrderId(): ?bool
    {
        return $this->withNoOrderId;
    }

    public function withWithNoOrderId(?bool $withNoOrderId): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->withNoOrderId = $withNoOrderId;

        return $new;
    }

    public function getMaintenanceLineItemAttributes(): ?CustomAttributesQueryListType
    {
        return $this->maintenanceLineItemAttributes;
    }

    public function withMaintenanceLineItemAttributes(?CustomAttributesQueryListType $maintenanceLineItemAttributes): SearchMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemAttributes = $maintenanceLineItemAttributes;

        return $new;
    }
}
