<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsageSummaryDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UsageSummaryDataType
     */
    private $usageSummary;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UsageSummaryDataType|array $usageSummary
     */
    public function __construct($usageSummary = null)
    {
        $this->usageSummary = $usageSummary;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UsageSummaryDataType|array $usageSummary
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

