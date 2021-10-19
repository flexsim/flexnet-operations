<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateMaintenanceRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType
     */
    protected $maintenance;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateMaintenanceDataType $maintenance)
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
}
