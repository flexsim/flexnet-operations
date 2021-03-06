<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMaintenanceQueryResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceQueryDataType
     */
    protected $maintenance;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceQueryDataType|array $maintenance
     */
    public function __construct($maintenance = null)
    {
        $this->maintenance = $maintenance;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceQueryDataType|array $maintenance
     */
    public static function create($maintenance = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceQueryDataType
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceQueryDataType $maintenance
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }
}
