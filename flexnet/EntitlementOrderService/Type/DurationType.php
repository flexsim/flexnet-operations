<?php

namespace Flexnet\EntitlementOrderService\Type;

class DurationType
{
    /**
     * @var int
     */
    private $numDuration;

    /**
     * @var string
     */
    private $durationUnit;

    /**
     * Constructor
     *
     * @param  int  $numDuration
     * @param  string  $durationUnit
     */
    public function __construct(int $numDuration, string $durationUnit)
    {
        $this->numDuration = $numDuration;
        $this->durationUnit = $durationUnit;
    }

    /**
     * @param  int  $numDuration
     * @param  string  $durationUnit
     */
    public static function create(int $numDuration, string $durationUnit)
    {
        return new static(...\func_get_args());
    }

    public function getNumDuration(): int
    {
        return $this->numDuration;
    }

    public function withNumDuration(int $numDuration): DurationType
    {
        $new = clone $this;
        $new->numDuration = $numDuration;

        return $new;
    }

    public function getDurationUnit(): string
    {
        return $this->durationUnit;
    }

    public function withDurationUnit(string $durationUnit): DurationType
    {
        $new = clone $this;
        $new->durationUnit = $durationUnit;

        return $new;
    }
}
