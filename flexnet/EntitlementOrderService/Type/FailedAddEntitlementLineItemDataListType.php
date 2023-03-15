<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedAddEntitlementLineItemDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType>|null
     */
    private $failedLineItemData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType>|null  $failedLineItemData
     */
    public function __construct(FailedAddEntitlementLineItemDataType|array|null $failedLineItemData = null)
    {
        $this->failedLineItemData = $failedLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType>|null  $failedLineItemData
     */
    public static function create(FailedAddEntitlementLineItemDataType|array|null $failedLineItemData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType>|null
     */
    public function getFailedLineItemData(): FailedAddEntitlementLineItemDataType|array|null
    {
        return $this->failedLineItemData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddEntitlementLineItemDataType>|null  $failedLineItemData
     */
    public function withFailedLineItemData(FailedAddEntitlementLineItemDataType|array|null $failedLineItemData): FailedAddEntitlementLineItemDataListType
    {
        $new = clone $this;
        $new->failedLineItemData = $failedLineItemData;

        return $new;
    }
}
