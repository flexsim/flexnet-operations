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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array|null $failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType>|null  $failedData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType>|null
     */
    public function getFailedData(): \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType>|null  $failedData
     */
    public function withFailedData(\Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataType|array|null $failedData): \Flexnet\EntitlementOrderService\Type\FailedUpdateEntitlementLineItemDataListType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
