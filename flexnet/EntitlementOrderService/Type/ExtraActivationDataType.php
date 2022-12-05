<?php

namespace Flexnet\EntitlementOrderService\Type;

class ExtraActivationDataType
{
    /**
     * @var int
     */
    private $allowedCount;

    /**
     * Constructor
     *
     * @param  int  $allowedCount
     */
    public function __construct(int $allowedCount)
    {
        $this->allowedCount = $allowedCount;
    }

    /**
     * @param  int  $allowedCount
     */
    public static function create(int $allowedCount)
    {
        return new static(...\func_get_args());
    }

    public function getAllowedCount(): int
    {
        return $this->allowedCount;
    }

    public function withAllowedCount(int $allowedCount): ExtraActivationDataType
    {
        $new = clone $this;
        $new->allowedCount = $allowedCount;

        return $new;
    }
}
