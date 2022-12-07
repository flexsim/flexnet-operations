<?php

namespace Flexnet\EntitlementOrderService\Type;

class PolicyTermType
{
    /**
     * @var int
     */
    private $duration;

    /**
     * @var string
     */
    private $durationUnit;

    /**
     * Constructor
     *
     * @param  int  $duration
     * @param  string  $durationUnit
     */
    public function __construct(int $duration, string $durationUnit)
    {
        $this->duration = $duration;
        $this->durationUnit = $durationUnit;
    }

    /**
     * @param  int  $duration
     * @param  string  $durationUnit
     */
    public static function create(int $duration, string $durationUnit)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param  int  $duration
     * @return PolicyTermType
     */
    public function withDuration(int $duration): PolicyTermType
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }

    /**
     * @return string
     */
    public function getDurationUnit(): string
    {
        return $this->durationUnit;
    }

    /**
     * @param  string  $durationUnit
     * @return PolicyTermType
     */
    public function withDurationUnit(string $durationUnit): PolicyTermType
    {
        $new = clone $this;
        $new->durationUnit = $durationUnit;

        return $new;
    }
}
