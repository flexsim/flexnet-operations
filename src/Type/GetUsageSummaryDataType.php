<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsageSummaryDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UsageSummaryDataType
     */
    protected $usageSummary;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UsageSummaryDataType|array $usageSummary
     */
    public function __construct($usageSummary = null)
    {
        $this->usageSummary = $usageSummary;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UsageSummaryDataType|array $usageSummary
     */
    public static function create($usageSummary = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UsageSummaryDataType
     */
    public function getUsageSummary()
    {
        return $this->usageSummary;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UsageSummaryDataType $usageSummary
     * @return $this
     */
    public function setUsageSummary($usageSummary)
    {
        $this->usageSummary = $usageSummary;
        return $this;
    }
}
