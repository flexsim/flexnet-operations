<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetMaintenanceStateRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType
     */
    protected $maintenance;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType $maintenance
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceStateDataType $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType $maintenance
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceStateDataType $maintenance)
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
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceStateDataType $maintenance
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }
}
