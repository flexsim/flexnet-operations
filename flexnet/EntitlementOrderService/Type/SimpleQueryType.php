<?php

namespace Flexnet\EntitlementOrderService\Type;

class SimpleQueryType
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(string $value, \Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(string $value, \Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function withValue(string $value): \Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\EntitlementOrderService\Type\SimpleSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\EntitlementOrderService\Type\SimpleSearchType $searchType): \Flexnet\EntitlementOrderService\Type\SimpleQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
