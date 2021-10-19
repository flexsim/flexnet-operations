<?php

namespace Flexsim\FlexnetOperations\Type;

class PolicyTermType extends FlexnetType
{

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var string
     */
    protected $durationUnit;

    /**
     * Constructor
     *
     * @param int $duration
     * @param string $durationUnit
     */
    public function __construct(int $duration, string $durationUnit)
    {
        $this->duration = $duration;
        $this->durationUnit = $durationUnit;
    }

    /**
     * create a new instance of this class
     *
     * @param int $duration
     * @param string $durationUnit
     */
    public static function create(int $duration, string $durationUnit)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return string
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * @param string $durationUnit
     * @return $this
     */
    public function setDurationUnit($durationUnit)
    {
        $this->durationUnit = $durationUnit;
        return $this;
    }
}
