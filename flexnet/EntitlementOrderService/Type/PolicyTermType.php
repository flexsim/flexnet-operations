<?php

namespace Flexnet\EntitlementOrderService\Type;

class PolicyTermType
{
    /**
     * @var int
     */
    private $duration;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DurationUnit
     */
    private $durationUnit;

    /**
     * Constructor
     */
    public function __construct(int $duration, \Flexnet\EntitlementOrderService\Type\DurationUnit $durationUnit)
    {
        $this->duration = $duration;
        $this->durationUnit = $durationUnit;
    }

    public static function create(int $duration, \Flexnet\EntitlementOrderService\Type\DurationUnit $durationUnit)
    {
        return new static(...\func_get_args());
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function withDuration(int $duration): \Flexnet\EntitlementOrderService\Type\PolicyTermType
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }

    public function getDurationUnit(): \Flexnet\EntitlementOrderService\Type\DurationUnit
    {
        return $this->durationUnit;
    }

    public function withDurationUnit(\Flexnet\EntitlementOrderService\Type\DurationUnit $durationUnit): \Flexnet\EntitlementOrderService\Type\PolicyTermType
    {
        $new = clone $this;
        $new->durationUnit = $durationUnit;

        return $new;
    }
}
