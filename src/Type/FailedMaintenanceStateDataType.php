<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMaintenanceStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType
     */
    protected $maintenance;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType  $maintenance
     * @param  string  $reason
     */
    public function __construct(MaintenanceStateDataType $maintenance, string $reason)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType  $maintenance
     * @param  string  $reason
     */
    public static function create(MaintenanceStateDataType $maintenance, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType  $maintenance
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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
