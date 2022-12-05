<?php

namespace Flexnet\EntitlementOrderService\Type;

class DateQueryType
{
    /**
     * @var \DateTimeInterface
     */
    private $value;

    /**
     * @var string
     */
    private $searchType;

    /**
     * Constructor
     *
     * @param  \DateTimeInterface  $value
     * @param  string  $searchType
     */
    public function __construct(\DateTimeInterface $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    /**
     * @param  \DateTimeInterface  $value
     * @param  string  $searchType
     */
    public static function create(\DateTimeInterface $value, string $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \DateTimeInterface
    {
        return $this->value;
    }

    public function withValue(\DateTimeInterface $value): DateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): string
    {
        return $this->searchType;
    }

    public function withSearchType(string $searchType): DateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
