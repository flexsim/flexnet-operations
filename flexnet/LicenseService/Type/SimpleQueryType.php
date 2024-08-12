<?php

namespace Flexnet\LicenseService\Type;

class SimpleQueryType
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(string $value, \Flexnet\LicenseService\Type\SimpleSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(string $value, \Flexnet\LicenseService\Type\SimpleSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function withValue(string $value): \Flexnet\LicenseService\Type\SimpleQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\LicenseService\Type\SimpleSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\LicenseService\Type\SimpleSearchType $searchType): \Flexnet\LicenseService\Type\SimpleQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
