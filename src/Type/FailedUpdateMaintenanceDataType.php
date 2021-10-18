<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateMaintenanceDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType
     */
    protected $maintenance;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance, string $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance
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
