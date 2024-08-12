<?php

namespace Flexnet\EntitlementOrderService\Type;

class AddedEntitlementLineItemDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType>|null
     */
    private $addedLineItems;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType>|null  $addedLineItems
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array|null $addedLineItems = null)
    {
        $this->addedLineItems = $addedLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType>|null  $addedLineItems
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array|null $addedLineItems = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType>|null
     */
    public function getAddedLineItems(): \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array|null
    {
        return $this->addedLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType>|null  $addedLineItems
     */
    public function withAddedLineItems(\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array|null $addedLineItems): \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataListType
    {
        $new = clone $this;
        $new->addedLineItems = $addedLineItems;

        return $new;
    }
}
