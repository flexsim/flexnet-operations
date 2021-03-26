<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMaintenanceDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceDataType
     */
    private $failedMaintenance;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceDataType|array $failedMaintenance
     */
    public function __construct($failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceDataType|array $failedMaintenance
     */
    public static function create($failedMaintenance = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMaintenanceDataType
     */
    public function getFailedMaintenance()
    {
        return $this->failedMaintenance;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMaintenanceDataType $failedMaintenance
     * @return $this
     */
    public function setFailedMaintenance($failedMaintenance)
    {
        $this->failedMaintenance = $failedMaintenance;
        return $this;
    }


}

