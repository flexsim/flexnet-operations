<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsageHistoryDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UsageHistoryDataType
     */
    protected $deviceUpdate;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UsageHistoryDataType|array $deviceUpdate
     */
    public function __construct($deviceUpdate = null)
    {
        $this->deviceUpdate = $deviceUpdate;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UsageHistoryDataType|array $deviceUpdate
     */
    public static function create($deviceUpdate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UsageHistoryDataType
     */
    public function getDeviceUpdate()
    {
        return $this->deviceUpdate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UsageHistoryDataType $deviceUpdate
     * @return $this
     */
    public function setDeviceUpdate($deviceUpdate)
    {
        $this->deviceUpdate = $deviceUpdate;
        return $this;
    }
}
