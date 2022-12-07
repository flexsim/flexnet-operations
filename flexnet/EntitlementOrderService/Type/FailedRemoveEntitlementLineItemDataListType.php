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
    public function __construct(FailedRemoveEntitlementLineItemDataType|array|null $failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null  $failedData
     */
    public static function create(FailedRemoveEntitlementLineItemDataType|array|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null
     */
    public function getFailedData(): FailedRemoveEntitlementLineItemDataType|array|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedRemoveEntitlementLineItemDataType>|null  $failedData
     * @return FailedRemoveEntitlementLineItemDataListType
     */
    public function withFailedData(FailedRemoveEntitlementLineItemDataType|array|null $failedData): FailedRemoveEntitlementLineItemDataListType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
