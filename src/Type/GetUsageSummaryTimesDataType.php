<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsageSummaryTimesDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UsageSummaryTimesDataType
     */
    protected $usageSummaryTime;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UsageSummaryTimesDataType|array  $usageSummaryTime
     */
    public function __construct($usageSummaryTime = null)
    {
        $this->usageSummaryTime = $usageSummaryTime;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UsageSummaryTimesDataType|array  $usageSummaryTime
     */
    public static function create($usageSummaryTime = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UsageSummaryTimesDataType
     */
    public function getUsageSummaryTime()
    {
        return $this->usageSummaryTime;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\UsageSummaryTimesDataType  $usageSummaryTime
     * @return $this
     */
    public function setUsageSummaryTime($usageSummaryTime)
    {
        $this->usageSummaryTime = $usageSummaryTime;

        return $this;
    }
}
