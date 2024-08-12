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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array|null $failedLineItem = null)
    {
        $this->failedLineItem = $failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType>|null  $failedLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array|null $failedLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType>|null
     */
    public function getFailedLineItem(): \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array|null
    {
        return $this->failedLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType>|null  $failedLineItem
     */
    public function withFailedLineItem(\Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataType|array|null $failedLineItem): \Flexnet\EntitlementOrderService\Type\FailedLineItemStateDataListType
    {
        $new = clone $this;
        $new->failedLineItem = $failedLineItem;

        return $new;
    }
}
