<?php

namespace Flexnet\EntitlementOrderService\Type;

class NumberQueryType
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $searchType;

    /**
     * Constructor
     *
     * @param  int  $value
     * @param  string  $searchType
     */
    public function __construct(int $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * @param  int  $value
     * @param  string  $searchType
     */
    public static function create(int $value, string $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function withValue(int $value): NumberQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): string
    {
        return $this->searchType;
    }

    public function withSearchType(string $searchType): NumberQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}