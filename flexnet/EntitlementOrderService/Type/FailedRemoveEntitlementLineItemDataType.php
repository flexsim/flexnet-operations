<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedRemoveEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|null
     */
    private $failedData;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|null  $failedData
     * @param  string|null  $reason
     */
    public function __construct(RemoveEntitlementLineItemDataType|null $failedData = null, string|null $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|null  $failedData
     * @param  string|null  $reason
     */
    public static function create(RemoveEntitlementLineItemDataType|null $failedData = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|null
     */
    public function getFailedData(): RemoveEntitlementLineItemDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemDataType|null  $failedData
     * @return FailedRemoveEntitlementLineItemDataType
     */
    public function withFailedData(RemoveEntitlementLineItemDataType|null $failedData): FailedRemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

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
     * @return FailedRemoveEntitlementLineItemDataType
     */
    public function withReason(string|null $reason): FailedRemoveEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
