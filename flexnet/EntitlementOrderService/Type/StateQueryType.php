<?php

namespace Flexnet\EntitlementOrderService\Type;

class StateQueryType
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $searchType;

    /**
     * Constructor
     *
     * @param  string  $value
     * @param  string  $searchType
     */
    public function __construct(string $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * @param  string  $value
     * @param  string  $searchType
     */
    public static function create(string $value, string $searchType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param  string  $value
     * @return StateQueryType
     */
    public function withValue(string $value): StateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchType(): string
    {
        return $this->searchType;
    }

    /**
     * @param  string  $searchType
     * @return StateQueryType
     */
    public function withSearchType(string $searchType): StateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
