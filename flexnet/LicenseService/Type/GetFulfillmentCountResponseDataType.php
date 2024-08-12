<?php

namespace Flexnet\LicenseService\Type;

class GetFulfillmentCountResponseDataType
{
    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     */
    public function __construct(int $count)
    {
        $this->count = $count;
    }

    public static function create(int $count)
    {
        return new static(...\func_get_args());
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function withCount(int $count): \Flexnet\LicenseService\Type\GetFulfillmentCountResponseDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
