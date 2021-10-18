<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateMaintenanceDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateMaintenanceDataType|array 
     */
    protected $failedMaintenance;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateMaintenanceDataType|array $failedMaintenance
     */
    public function __construct($failedMaintenance = null)
    {
        $this->failedMaintenance = $failedMaintenance;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateMaintenanceDataType|array $failedMaintenance
     */
    public static function create($failedMaintenance = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateMaintenanceDataType|array 
     */
    public function getFailedMaintenance()
    {
        return $this->failedMaintenance;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateMaintenanceDataType|array $failedMaintenance
     * @return $this
     */
    public function setFailedMaintenance($failedMaintenance)
    {
        $this->failedMaintenance = $failedMaintenance;
        return $this;
    }
}
