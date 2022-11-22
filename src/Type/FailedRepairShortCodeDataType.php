<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRepairShortCodeDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType
     */
    protected $shortCodeData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType  $shortCodeData
     * @param  string  $reason
     */
    public function __construct(RepairShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType  $shortCodeData
     * @param  string  $reason
     */
    public static function create(RepairShortCodeDataType $shortCodeData, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType
     */
    public function getShortCodeData()
    {
        return $this->shortCodeData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\RepairShortCodeDataType  $shortCodeData
     * @return $this
     */
    public function setShortCodeData($shortCodeData)
    {
        $this->shortCodeData = $shortCodeData;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
