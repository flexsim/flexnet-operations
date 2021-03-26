<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteMaintenanceDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    private $maintenanceIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    public function getMaintenanceIdentifier()
    {
        return $this->maintenanceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @return $this
     */
    public function setMaintenanceIdentifier($maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        return $this;
    }


}
