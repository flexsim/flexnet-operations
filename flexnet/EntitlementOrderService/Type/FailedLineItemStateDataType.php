<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedLineItemStateDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LineItemStateDataType
     */
    private $lineItem;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType  $lineItem
     */
    public function __construct(LineItemStateDataType $lineItem, string $reason)
    {
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType  $lineItem
     */
    public static function create(LineItemStateDataType $lineItem, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LineItemStateDataType
     */
    public function getLineItem(): LineItemStateDataType
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType  $lineItem
     */
    public function withLineItem(LineItemStateDataType $lineItem): FailedLineItemStateDataType
    {
        $new = clone $this;
        $new->lineItem = $lineItem;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedLineItemStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
