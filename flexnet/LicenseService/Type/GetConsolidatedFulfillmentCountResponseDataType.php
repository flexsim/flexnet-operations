<?php

namespace Flexnet\LicenseService\Type;

class GetConsolidatedFulfillmentCountResponseDataType
{
    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @param  int  $count
     */
    public function __construct(int $count)
    {
        $this->count = $count;
    }

    /**
     * @param  int  $count
     */
    public static function create(int $count)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param  int  $count
     * @return GetConsolidatedFulfillmentCountResponseDataType
     */
    public function withCount(int $count): GetConsolidatedFulfillmentCountResponseDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
