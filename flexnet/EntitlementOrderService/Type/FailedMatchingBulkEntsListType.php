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
    public function __construct(FailedMatchingBulkEntDataType|array $failedBulkEnt)
    {
        $this->failedBulkEnt = $failedBulkEnt;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\FailedMatchingBulkEntDataType>  $failedBulkEnt
     */
    public static function create(FailedMatchingBulkEntDataType|array $failedBulkEnt)
    {
        return new static(...\func_get_args());
    }

    public function getFailedBulkEnt(): FailedMatchingBulkEntDataType|array
    {
        return $this->failedBulkEnt;
    }

    public function withFailedBulkEnt(FailedMatchingBulkEntDataType|array $failedBulkEnt): FailedMatchingBulkEntsListType
    {
        $new = clone $this;
        $new->failedBulkEnt = $failedBulkEnt;

        return $new;
    }
}
