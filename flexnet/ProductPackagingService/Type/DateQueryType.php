<?php

namespace Flexnet\ProductPackagingService\Type;

class DateQueryType
{
    /**
     * @var \DateTimeInterface
     */
    private $value;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DatedSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(\DateTimeInterface $value, \Flexnet\ProductPackagingService\Type\DatedSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(\DateTimeInterface $value, \Flexnet\ProductPackagingService\Type\DatedSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \DateTimeInterface
    {
        return $this->value;
    }

    public function withValue(\DateTimeInterface $value): \Flexnet\ProductPackagingService\Type\DateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\ProductPackagingService\Type\DatedSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\ProductPackagingService\Type\DatedSearchType $searchType): \Flexnet\ProductPackagingService\Type\DateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
