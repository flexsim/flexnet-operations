<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteMaintenanceDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    protected $maintenanceIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public function __construct(MaintenanceIdentifierType $maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     */
    public static function create(MaintenanceIdentifierType $maintenanceIdentifier)
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
     * @param  \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType  $maintenanceIdentifier
     * @return $this
     */
    public function setMaintenanceIdentifier($maintenanceIdentifier)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;

        return $this;
    }
}
