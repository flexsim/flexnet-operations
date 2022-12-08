<?php

namespace Flexnet\LicenseService\Type;

class SimpleQueryType
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
     * @return SimpleQueryType
     */
    public function withValue(string $value): SimpleQueryType
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
     * @return SimpleQueryType
     */
    public function withSearchType(string $searchType): SimpleQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
