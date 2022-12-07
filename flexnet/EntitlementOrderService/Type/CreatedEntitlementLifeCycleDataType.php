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
     * @param  string  $entitlementRecordRefNo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null  $createdLineItemData
     */
    public function __construct(string $entitlementRecordRefNo, EntitlementIdentifierType $parentEntitlementIdentifier, LifeCycleLineItemDataType|array|null $createdLineItemData = null)
    {
        $this->entitlementRecordRefNo = $entitlementRecordRefNo;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->createdLineItemData = $createdLineItemData;
    }

    /**
     * @param  string  $entitlementRecordRefNo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $parentEntitlementIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null  $createdLineItemData
     */
    public static function create(string $entitlementRecordRefNo, EntitlementIdentifierType $parentEntitlementIdentifier, LifeCycleLineItemDataType|array|null $createdLineItemData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getEntitlementRecordRefNo(): string
    {
        return $this->entitlementRecordRefNo;
    }

    /**
     * @param  string  $entitlementRecordRefNo
     * @return CreatedEntitlementLifeCycleDataType
     */
    public function withEntitlementRecordRefNo(string $entitlementRecordRefNo): CreatedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->entitlementRecordRefNo = $entitlementRecordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getParentEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->parentEntitlementIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $parentEntitlementIdentifier
     * @return CreatedEntitlementLifeCycleDataType
     */
    public function withParentEntitlementIdentifier(EntitlementIdentifierType $parentEntitlementIdentifier): CreatedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->parentEntitlementIdentifier = $parentEntitlementIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null
     */
    public function getCreatedLineItemData(): LifeCycleLineItemDataType|array|null
    {
        return $this->createdLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\LifeCycleLineItemDataType>|null  $createdLineItemData
     * @return CreatedEntitlementLifeCycleDataType
     */
    public function withCreatedLineItemData(LifeCycleLineItemDataType|array|null $createdLineItemData): CreatedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->createdLineItemData = $createdLineItemData;

        return $new;
    }
}
