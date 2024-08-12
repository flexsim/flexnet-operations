<?php

namespace Flexnet\ProductPackagingService\Type;

class SimpleQueryType
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(string $value, \Flexnet\ProductPackagingService\Type\SimpleSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(string $value, \Flexnet\ProductPackagingService\Type\SimpleSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function withValue(string $value): \Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\ProductPackagingService\Type\SimpleSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\ProductPackagingService\Type\SimpleSearchType $searchType): \Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
