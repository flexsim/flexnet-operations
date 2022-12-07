<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedAddEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|null
     */
    private $lineItem;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|null  $lineItem
     * @param  string|null  $reason
     */
    public function __construct(AddEntitlementLineItemDataType|null $lineItem = null, string|null $reason = null)
    {
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|null  $lineItem
     * @param  string|null  $reason
     */
    public static function create(AddEntitlementLineItemDataType|null $lineItem = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|null
     */
    public function getLineItem(): AddEntitlementLineItemDataType|null
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddEntitlementLineItemDataType|null  $lineItem
     * @return FailedAddEntitlementLineItemDataType
     */
    public function withLineItem(AddEntitlementLineItemDataType|null $lineItem): FailedAddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->reason;
    }

    /**
     * @param  string|null  $reason
     * @return FailedAddEntitlementLineItemDataType
     */
    public function withReason(string|null $reason): FailedAddEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
