<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteMaintenanceDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType
     */
    private $maintenanceIdentifier;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $reason = null)
    {
        $this->maintenanceIdentifier = $maintenanceIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceIdentifierType $maintenanceIdentifier, string $reason = null)
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
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

