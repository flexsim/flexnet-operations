<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedMatchingBulkEntsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType>
     */
    private $failedBulkEnt;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType>  $failedBulkEnt
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array $failedBulkEnt)
    {
        $this->failedBulkEnt = $failedBulkEnt;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType>  $failedBulkEnt
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array $failedBulkEnt)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType>
     */
    public function getFailedBulkEnt(): \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array
    {
        return $this->failedBulkEnt;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType>  $failedBulkEnt
     */
    public function withFailedBulkEnt(\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array $failedBulkEnt): \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntsListType
    {
        $new = clone $this;
        $new->failedBulkEnt = $failedBulkEnt;

        return $new;
    }
}
