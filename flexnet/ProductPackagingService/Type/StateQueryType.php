<?php

namespace Flexnet\ProductPackagingService\Type;

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
     */
    public function __construct(string $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(string $value, string $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function withValue(string $value): StateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): string
    {
        return $this->searchType;
    }

    public function withSearchType(string $searchType): StateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
