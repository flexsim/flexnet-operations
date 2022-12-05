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
     * @param  string  $reason
     */
    public function __construct(LineItemStateDataType $lineItem, string $reason)
    {
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LineItemStateDataType  $lineItem
     * @param  string  $reason
     */
    public static function create(LineItemStateDataType $lineItem, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getLineItem(): LineItemStateDataType
    {
        return $this->lineItem;
    }

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
