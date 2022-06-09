<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteMaintenanceRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteMaintenanceDataType
     */
    protected $maintenance;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceDataType $maintenance
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceDataType $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceDataType $maintenance
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceDataType $maintenance)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteMaintenanceDataType
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceDataType $maintenance
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }
}
