<?php

namespace Flexsim\FlexnetOperations\Type;

class DurationType extends FlexnetType
{
    /**
     * @var int
     */
    protected $numDuration;

    /**
     * @var string
     */
    protected $durationUnit;

    /**
     * Constructor
     *
     * @param int $numDuration
     * @param string $durationUnit
     */
    public function __construct(int $numDuration, string $durationUnit)
    {
        $this->numDuration = $numDuration;
        $this->durationUnit = $durationUnit;
    }

    /**
     * create a new instance of this class
     *
     * @param int $numDuration
     * @param string $durationUnit
     */
    public static function create(int $numDuration, string $durationUnit)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getNumDuration()
    {
        return $this->numDuration;
    }

    /**
     * @param int $numDuration
     * @return $this
     */
    public function setNumDuration($numDuration)
    {
        $this->numDuration = $numDuration;

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
