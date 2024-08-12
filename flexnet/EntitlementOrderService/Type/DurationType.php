<?php

namespace Flexnet\EntitlementOrderService\Type;

class DurationType
{
    /**
     * @var int
     */
    private $numDuration;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DurationUnit
     */
    private $durationUnit;

    /**
     * Constructor
     */
    public function __construct(int $numDuration, \Flexnet\EntitlementOrderService\Type\DurationUnit $durationUnit)
    {
        $this->numDuration = $numDuration;
        $this->durationUnit = $durationUnit;
    }

    public static function create(int $numDuration, \Flexnet\EntitlementOrderService\Type\DurationUnit $durationUnit)
    {
        return new static(...\func_get_args());
    }

    public function getNumDuration(): int
    {
        return $this->numDuration;
    }

    public function withNumDuration(int $numDuration): \Flexnet\EntitlementOrderService\Type\DurationType
    {
        $new = clone $this;
        $new->numDuration = $numDuration;

        return $new;
    }

    public function getDurationUnit(): \Flexnet\EntitlementOrderService\Type\DurationUnit
    {
        return $this->durationUnit;
    }

    public function withDurationUnit(\Flexnet\EntitlementOrderService\Type\DurationUnit $durationUnit): \Flexnet\EntitlementOrderService\Type\DurationType
    {
        $new = clone $this;
        $new->durationUnit = $durationUnit;

        return $new;
    }
}
