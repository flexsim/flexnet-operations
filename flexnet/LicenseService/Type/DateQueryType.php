<?php

namespace Flexnet\LicenseService\Type;

class DateQueryType
{
    /**
     * @var \DateTimeInterface
     */
    private $value;

    /**
     * @var \Flexnet\LicenseService\Type\DatedSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(\DateTimeInterface $value, \Flexnet\LicenseService\Type\DatedSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(\DateTimeInterface $value, \Flexnet\LicenseService\Type\DatedSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \DateTimeInterface
    {
        return $this->value;
    }

    public function withValue(\DateTimeInterface $value): \Flexnet\LicenseService\Type\DateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\LicenseService\Type\DatedSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\LicenseService\Type\DatedSearchType $searchType): \Flexnet\LicenseService\Type\DateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
