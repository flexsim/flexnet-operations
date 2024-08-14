<?php

namespace Flexnet\EntitlementOrderService\Type;

class GetMatchingBulkEntsResponseListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType>
     */
    private $matchingBulkEnt;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType>  $matchingBulkEnt
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array $matchingBulkEnt)
    {
        $this->matchingBulkEnt = $matchingBulkEnt;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType>  $matchingBulkEnt
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array $matchingBulkEnt)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType>
     */
    public function getMatchingBulkEnt(): \Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array
    {
        return $this->matchingBulkEnt;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array<\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType>  $matchingBulkEnt
     */
    public function withMatchingBulkEnt(\Flexnet\EntitlementOrderService\Type\MatchingBulkEntDataType|array $matchingBulkEnt): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseListType
    {
        $new = clone $this;
        $new->matchingBulkEnt = $matchingBulkEnt;

        return $new;
    }
}
