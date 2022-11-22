<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateMaintenanceRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType
     */
    protected $maintenance;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType  $maintenance
     */
    public function __construct(UpdateMaintenanceDataType $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType  $maintenance
     */
    public static function create(UpdateMaintenanceDataType $maintenance)
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
     * @param  \Flexsim\FlexnetOperations\Type\UpdateMaintenanceDataType  $maintenance
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }
}
