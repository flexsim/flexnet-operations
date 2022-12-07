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

    /**
     * @return int
     */
    public function getAllowedCount(): int
    {
        return $this->allowedCount;
    }

    /**
     * @param  int  $allowedCount
     * @return ExtraActivationDataType
     */
    public function withAllowedCount(int $allowedCount): ExtraActivationDataType
    {
        $new = clone $this;
        $new->allowedCount = $allowedCount;

        return $new;
    }
}
