<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedRemoveEntitlementLineItemDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null  $failedData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array|null $failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null  $failedData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null
     */
    public function getFailedData(): \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null  $failedData
     */
    public function withFailedData(\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array|null $failedData): \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataListType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
