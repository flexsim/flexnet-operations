<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedEntitlementLifeCycleDataType
{
    /**
     * @var string
     */
    private $entitlementRecordRefNo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $parentEntitlementIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null
     */
    private $createdLineItemData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null  $createdLineItemData
     */
    public function __construct(string $entitlementRecordRefNo, \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier, \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array|null $createdLineItemData = null)
    {
        $this->entitlementRecordRefNo = $entitlementRecordRefNo;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->createdLineItemData = $createdLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null  $createdLineItemData
     */
    public static function create(string $entitlementRecordRefNo, \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier, \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array|null $createdLineItemData = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementRecordRefNo(): string
    {
        return $this->entitlementRecordRefNo;
    }

    public function withEntitlementRecordRefNo(string $entitlementRecordRefNo): \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->entitlementRecordRefNo = $entitlementRecordRefNo;

        return $new;
    }

    public function getParentEntitlementIdentifier(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    public function withParentEntitlementIdentifier(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $parentEntitlementIdentifier): \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null
     */
    public function getCreatedLineItemData(): \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array|null
    {
        return $this->createdLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null  $createdLineItemData
     */
    public function withCreatedLineItemData(\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array|null $createdLineItemData): \Flexnet\EntitlementOrderService\Type\CreatedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->createdLineItemData = $createdLineItemData;

        return $new;
    }
}
