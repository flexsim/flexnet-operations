<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedLineItemStateDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType>|null
     */
    private $failedLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType>|null  $failedLineItem
     */
    public function __construct(FailedLineItemStateDataType|array|null $failedLineItem = null)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType>|null  $failedLineItem
     */
    public static function create(FailedLineItemStateDataType|array|null $failedLineItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedLineItem(): FailedLineItemStateDataType|array|null
    {
        return $this->failedLineItem;
    }

    public function withFailedLineItem(FailedLineItemStateDataType|array|null $failedLineItem): FailedLineItemStateDataListType
    {
        $new = clone $this;
        $new->failedLineItem = $failedLineItem;

        return $new;
    }
}
