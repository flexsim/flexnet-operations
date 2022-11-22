<?php

namespace Flexsim\FlexnetOperations\Type;

class UsageSummaryTimesDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $summaryTimeId;

    /**
     * @var \DateTimeInterface
     */
    protected $summaryTime;

    /**
     * Constructor
     *
     * @param  string  $summaryTimeId
     * @param  \DateTimeInterface  $summaryTime
     */
    public function __construct(string $summaryTimeId, \DateTimeInterface $summaryTime)
    {
        $this->summaryTimeId = $summaryTimeId;
        $this->summaryTime = $summaryTime;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $summaryTimeId
     * @param  \DateTimeInterface  $summaryTime
     */
    public static function create(string $summaryTimeId, \DateTimeInterface $summaryTime)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getSummaryTimeId()
    {
        return $this->summaryTimeId;
    }

    /**
     * @param  string  $summaryTimeId
     * @return $this
     */
    public function setSummaryTimeId($summaryTimeId)
    {
        $this->summaryTimeId = $summaryTimeId;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSummaryTime()
    {
        return $this->summaryTime;
    }

    /**
     * @param  \DateTimeInterface  $summaryTime
     * @return $this
     */
    public function setSummaryTime($summaryTime)
    {
        $this->summaryTime = $summaryTime;

        return $this;
    }
}
