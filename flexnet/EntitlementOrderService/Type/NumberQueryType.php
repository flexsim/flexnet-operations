<?php

namespace Flexnet\EntitlementOrderService\Type;

class NumberQueryType
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\NumberSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(int $value, \Flexnet\EntitlementOrderService\Type\NumberSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(int $value, \Flexnet\EntitlementOrderService\Type\NumberSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function withValue(int $value): \Flexnet\EntitlementOrderService\Type\NumberQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\EntitlementOrderService\Type\NumberSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\EntitlementOrderService\Type\NumberSearchType $searchType): \Flexnet\EntitlementOrderService\Type\NumberQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
