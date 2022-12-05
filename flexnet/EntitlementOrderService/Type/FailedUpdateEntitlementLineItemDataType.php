<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUpdateEntitlementLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|null
     */
    private $failedData;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|null  $failedData
     * @param  string|null  $reason
     */
    public function __construct(UpdateEntitlementLineItemDataType|null $failedData = null, string|null $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemDataType|null  $failedData
     * @param  string|null  $reason
     */
    public static function create(UpdateEntitlementLineItemDataType|null $failedData = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFailedData(): UpdateEntitlementLineItemDataType|null
    {
        return $this->failedData;
    }

    public function withFailedData(UpdateEntitlementLineItemDataType|null $failedData): FailedUpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUpdateEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
