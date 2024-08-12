<?php

namespace Flexnet\EntitlementOrderService\Type;

class StateQueryType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateType
     */
    private $value;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StateType $value, \Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StateType $value, \Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \Flexnet\EntitlementOrderService\Type\StateType
    {
        return $this->value;
    }

    public function withValue(\Flexnet\EntitlementOrderService\Type\StateType $value): \Flexnet\EntitlementOrderService\Type\StateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\EntitlementOrderService\Type\SimpleSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType): \Flexnet\EntitlementOrderService\Type\StateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
