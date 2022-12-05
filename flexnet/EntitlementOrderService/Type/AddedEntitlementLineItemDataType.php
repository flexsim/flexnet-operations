<?php

namespace Flexnet\EntitlementOrderService\Type;

class AddedEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

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
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  string|array<string>|null  $lineItemUniqueIds
     * @param  string|array<string>|null  $maintenanceLineItemUniqueIds
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifiers
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $maintenanceLineItemIdentifiers
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, string|array|null $lineItemUniqueIds = null, string|array|null $maintenanceLineItemUniqueIds = null, EntitlementLineItemIdentifierType|array|null $lineItemIdentifiers = null, EntitlementLineItemIdentifierType|array|null $maintenanceLineItemIdentifiers = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemUniqueIds = $lineItemUniqueIds;
        $this->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;
        $this->lineItemIdentifiers = $lineItemIdentifiers;
        $this->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  string|array<string>|null  $lineItemUniqueIds
     * @param  string|array<string>|null  $maintenanceLineItemUniqueIds
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $lineItemIdentifiers
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType>|null  $maintenanceLineItemIdentifiers
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, string|array|null $lineItemUniqueIds = null, string|array|null $maintenanceLineItemUniqueIds = null, EntitlementLineItemIdentifierType|array|null $lineItemIdentifiers = null, EntitlementLineItemIdentifierType|array|null $maintenanceLineItemIdentifiers = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): AddedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getLineItemUniqueIds(): string|array|null
    {
        return $this->lineItemUniqueIds;
    }

    public function withLineItemUniqueIds(string|array|null $lineItemUniqueIds): AddedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemUniqueIds = $lineItemUniqueIds;

        return $new;
    }

    public function getMaintenanceLineItemUniqueIds(): string|array|null
    {
        return $this->maintenanceLineItemUniqueIds;
    }

    public function withMaintenanceLineItemUniqueIds(string|array|null $maintenanceLineItemUniqueIds): AddedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;

        return $new;
    }

    public function getLineItemIdentifiers(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->lineItemIdentifiers;
    }

    public function withLineItemIdentifiers(EntitlementLineItemIdentifierType|array|null $lineItemIdentifiers): AddedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItemIdentifiers = $lineItemIdentifiers;

        return $new;
    }

    public function getMaintenanceLineItemIdentifiers(): EntitlementLineItemIdentifierType|array|null
    {
        return $this->maintenanceLineItemIdentifiers;
    }

    public function withMaintenanceLineItemIdentifiers(EntitlementLineItemIdentifierType|array|null $maintenanceLineItemIdentifiers): AddedEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;

        return $new;
    }
}
