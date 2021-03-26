<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateMaintenanceRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType
     */
    private $maintenance;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType $maintenance)
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


}

