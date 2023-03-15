<?php

namespace Flexnet\ProductPackagingService\Type;

class VersionFormatQueryType
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

    public function withValue(string $value): VersionFormatQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): string
    {
        return $this->searchType;
    }

    public function withSearchType(string $searchType): VersionFormatQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
