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
     */
    public function __construct(int $allowedCount)
    {
        $this->allowedCount = $allowedCount;
    }

    public static function create(int $allowedCount)
    {
        return new static(...\func_get_args());
    }

    public function getAllowedCount(): int
    {
        return $this->allowedCount;
    }

    public function withAllowedCount(int $allowedCount): \Flexnet\EntitlementOrderService\Type\ExtraActivationDataType
    {
        $new = clone $this;
        $new->allowedCount = $allowedCount;

        return $new;
    }
}
