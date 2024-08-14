<?php

namespace Flexnet\EntitlementOrderService\Type;

class WebRegKeyCountDataType
{
    /**
     * @var int
     */
    private $totalCount;

    /**
     * @var int
     */
    private $redeemedCount;

    /**
     * Constructor
     */
    public function __construct(int $totalCount, int $redeemedCount)
    {
        $this->totalCount = $totalCount;
        $this->redeemedCount = $redeemedCount;
    }

    public static function create(int $totalCount, int $redeemedCount)
    {
        return new static(...\func_get_args());
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function withTotalCount(int $totalCount): \Flexnet\EntitlementOrderService\Type\WebRegKeyCountDataType
    {
        $new = clone $this;
        $new->totalCount = $totalCount;

        return $new;
    }

    public function getRedeemedCount(): int
    {
        return $this->redeemedCount;
    }

    public function withRedeemedCount(int $redeemedCount): \Flexnet\EntitlementOrderService\Type\WebRegKeyCountDataType
    {
        $new = clone $this;
        $new->redeemedCount = $redeemedCount;

        return $new;
    }
}
