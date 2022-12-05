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
    public function __construct(AddedEntitlementLineItemDataType|array|null $addedLineItems = null)
    {
        $this->addedLineItems = $addedLineItems;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\AddedEntitlementLineItemDataType>|null  $addedLineItems
     */
    public static function create(AddedEntitlementLineItemDataType|array|null $addedLineItems = null)
    {
        return new static(...\func_get_args());
    }

    public function getAddedLineItems(): AddedEntitlementLineItemDataType|array|null
    {
        return $this->addedLineItems;
    }

    public function withAddedLineItems(AddedEntitlementLineItemDataType|array|null $addedLineItems): AddedEntitlementLineItemDataListType
    {
        $new = clone $this;
        $new->addedLineItems = $addedLineItems;

        return $new;
    }
}
