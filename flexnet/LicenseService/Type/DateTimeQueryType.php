<?php

namespace Flexnet\LicenseService\Type;

class DateTimeQueryType
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
     */
    public function __construct(\DateTimeInterface $value, string $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(\DateTimeInterface $value, string $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \DateTimeInterface
    {
        return $this->value;
    }

    public function withValue(\DateTimeInterface $value): DateTimeQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): string
    {
        return $this->searchType;
    }

    public function withSearchType(string $searchType): DateTimeQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
