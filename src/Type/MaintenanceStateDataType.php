<?php

namespace Flexsim\FlexnetOperations\Type;

class MaintenanceStateDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    protected $maintenanceIdentifier;

    /**
     * @var string
     */
    protected $stateToSet;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @var string $stateToSet
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $stateToSet)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @var string $stateToSet
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $stateToSet)
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

    /**
     * @return string
     */
    public function getStateToSet()
    {
        return $this->stateToSet;
    }

    /**
     * @param string $stateToSet
     * @return $this
     */
    public function setStateToSet($stateToSet)
    {
        $this->stateToSet = $stateToSet;
        return $this;
    }
}
