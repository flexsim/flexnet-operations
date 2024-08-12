<?php

namespace Flexnet\EntitlementOrderService\Type;

class DateQueryType
{
    /**
     * @var \DateTimeInterface
     */
    private $value;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DatedSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(\DateTimeInterface $value, \Flexnet\EntitlementOrderService\Type\DatedSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(\DateTimeInterface $value, \Flexnet\EntitlementOrderService\Type\DatedSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \DateTimeInterface
    {
        return $this->value;
    }

    public function withValue(\DateTimeInterface $value): \Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\EntitlementOrderService\Type\DatedSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\EntitlementOrderService\Type\DatedSearchType $searchType): \Flexnet\EntitlementOrderService\Type\DateQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
