<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedSimpleEntitlementDataType
{
    /**
     * @var string
     */
    private $recordRefNo;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $entitlementId;

    /**
     * @var string|array<string>|null
     */
    private $lineItemUniqueIds;

    /**
     * @var string|array<string>|null
     */
    private $maintenanceLineItemUniqueIds;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    private $lineItemIdentifiers;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    private $maintenanceLineItemIdentifiers;

    /**
     * Constructor
     *
     * @param  string  $recordRefNo
     * @param  string  $uniqueId
     * @param  string  $entitlementId
     * @param  string|array<string>|null  $lineItemUniqueIds
     * @param  string|array<string>|null  $maintenanceLineItemUniqueIds
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifiers
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $maintenanceLineItemIdentifiers
     */
    public function __construct(string $recordRefNo, string $uniqueId, string $entitlementId, string|array|null $lineItemUniqueIds = null, string|array|null $maintenanceLineItemUniqueIds = null, EntitlementLineItemIdentifierType|array|null $lineItemIdentifiers = null, EntitlementLineItemIdentifierType|array|null $maintenanceLineItemIdentifiers = null)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
        $this->entitlementId = $entitlementId;
        $this->lineItemUniqueIds = $lineItemUniqueIds;
        $this->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;
        $this->lineItemIdentifiers = $lineItemIdentifiers;
        $this->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;
    }

    /**
     * @param  string  $recordRefNo
     * @param  string  $uniqueId
     * @param  string  $entitlementId
     * @param  string|array<string>|null  $lineItemUniqueIds
     * @param  string|array<string>|null  $maintenanceLineItemUniqueIds
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifiers
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $maintenanceLineItemIdentifiers
     */
    public static function create(string $recordRefNo, string $uniqueId, string $entitlementId, string|array|null $lineItemUniqueIds = null, string|array|null $maintenanceLineItemUniqueIds = null, EntitlementLineItemIdentifierType|array|null $lineItemIdentifiers = null, EntitlementLineItemIdentifierType|array|null $maintenanceLineItemIdentifiers = null)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): string
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(string $recordRefNo): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getEntitlementId(): string
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(string $entitlementId): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }

    public function getLineItemUniqueIds(): string|array|null
    {
        return $this->lineItemUniqueIds;
    }

    public function withLineItemUniqueIds(string|array|null $lineItemUniqueIds): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItemUniqueIds = $lineItemUniqueIds;

        return $new;
    }

    public function getMaintenanceLineItemUniqueIds(): string|array|null
    {
        return $this->maintenanceLineItemUniqueIds;
    }

    public function withMaintenanceLineItemUniqueIds(string|array|null $maintenanceLineItemUniqueIds): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;

        return $new;
    }

    public function getLineItemIdentifiers(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->lineItemIdentifiers;
    }

    public function withLineItemIdentifiers(EntitlementLineItemIdentifierType|array|null $lineItemIdentifiers): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItemIdentifiers = $lineItemIdentifiers;

        return $new;
    }

    public function getMaintenanceLineItemIdentifiers(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->maintenanceLineItemIdentifiers;
    }

    public function withMaintenanceLineItemIdentifiers(EntitlementLineItemIdentifierType|array|null $maintenanceLineItemIdentifiers): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;

        return $new;
    }
}
