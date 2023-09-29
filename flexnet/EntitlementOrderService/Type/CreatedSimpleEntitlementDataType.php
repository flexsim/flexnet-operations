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
     * @param  string|array<string>|null  $lineItemUniqueIds
     * @param  string|array<string>|null  $maintenanceLineItemUniqueIds
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifiers
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $maintenanceLineItemIdentifiers
     */
    public function __construct(string $recordRefNo, string $uniqueId, string $entitlementId, string|array $lineItemUniqueIds = null, string|array $maintenanceLineItemUniqueIds = null, EntitlementLineItemIdentifierType|array $lineItemIdentifiers = null, EntitlementLineItemIdentifierType|array $maintenanceLineItemIdentifiers = null)
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
     * @param  string|array<string>|null  $lineItemUniqueIds
     * @param  string|array<string>|null  $maintenanceLineItemUniqueIds
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifiers
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $maintenanceLineItemIdentifiers
     */
    public static function create(string $recordRefNo, string $uniqueId, string $entitlementId, string|array $lineItemUniqueIds = null, string|array $maintenanceLineItemUniqueIds = null, EntitlementLineItemIdentifierType|array $lineItemIdentifiers = null, EntitlementLineItemIdentifierType|array $maintenanceLineItemIdentifiers = null)
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

    /**
     * @return string|array<string>|null
     */
    public function getLineItemUniqueIds(): string|array|null
    {
        return $this->lineItemUniqueIds;
    }

    /**
     * @param  string|array<string>|null  $lineItemUniqueIds
     */
    public function withLineItemUniqueIds(string|array|null $lineItemUniqueIds): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItemUniqueIds = $lineItemUniqueIds;

        return $new;
    }

    /**
     * @return string|array<string>|null
     */
    public function getMaintenanceLineItemUniqueIds(): string|array|null
    {
        return $this->maintenanceLineItemUniqueIds;
    }

    /**
     * @param  string|array<string>|null  $maintenanceLineItemUniqueIds
     */
    public function withMaintenanceLineItemUniqueIds(string|array|null $maintenanceLineItemUniqueIds): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    public function getLineItemIdentifiers(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->lineItemIdentifiers;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifiers
     */
    public function withLineItemIdentifiers(EntitlementLineItemIdentifierType|array|null $lineItemIdentifiers): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->lineItemIdentifiers = $lineItemIdentifiers;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null
     */
    public function getMaintenanceLineItemIdentifiers(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->maintenanceLineItemIdentifiers;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $maintenanceLineItemIdentifiers
     */
    public function withMaintenanceLineItemIdentifiers(EntitlementLineItemIdentifierType|array|null $maintenanceLineItemIdentifiers): CreatedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;

        return $new;
    }
}
