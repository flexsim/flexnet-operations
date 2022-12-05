<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUpdateEntitlementLineItemDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType>|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType>|null  $failedData
     */
    public function __construct(FailedUpdateEntitlementLineItemDataType|array|null $failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType>|null  $failedData
     */
    public static function create(FailedUpdateEntitlementLineItemDataType|array|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedData(): FailedUpdateEntitlementLineItemDataType|array|null
    {
        return $this->failedData;
    }

    public function withFailedData(FailedUpdateEntitlementLineItemDataType|array|null $failedData): FailedUpdateEntitlementLineItemDataListType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
