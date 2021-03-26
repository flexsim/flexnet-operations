<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMaintenanceDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType
     */
    private $maintenance;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance = null, string $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;
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
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

